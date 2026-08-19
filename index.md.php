<?php
header('Content-Type: text/markdown; charset=UTF-8');
header('Vary: Accept');
header('Link: </>; rel="alternate"; type="text/html"');

ob_start();
include __DIR__ . '/index.php';
$homepage = ob_get_clean();

$document = new DOMDocument();
$previousUseErrors = libxml_use_internal_errors(true);
$document->loadHTML('<?xml encoding="UTF-8">' . $homepage);
libxml_clear_errors();
libxml_use_internal_errors($previousUseErrors);

$main = $document->getElementById('main');
if (!$main) {
    http_response_code(500);
    exit("# Homepage unavailable\n\nThe homepage content could not be rendered.\n");
}

function markdown_text(DOMNode $node): string
{
    $text = '';

    foreach ($node->childNodes as $child) {
        if ($child->nodeType === XML_TEXT_NODE) {
            $text .= preg_replace('/\\s+/', ' ', $child->nodeValue);
            continue;
        }

        if (!$child instanceof DOMElement) {
            continue;
        }

        $tag = strtolower($child->nodeName);
        if ($tag === 'img') {
            $alt = trim($child->getAttribute('alt'));
            $src = trim($child->getAttribute('src'));
            if ($src !== '') {
                $text .= '![' . $alt . '](' . $src . ')';
            }
            continue;
        }

        if ($tag === 'a') {
            $label = trim(markdown_text($child));
            $href = trim($child->getAttribute('href'));
            $text .= $href !== '' ? '[' . $label . '](' . $href . ')' : $label;
            continue;
        }

        if ($tag === 'br') {
            $text .= "\n";
            continue;
        }

        $text .= markdown_text($child);
    }

    return trim(preg_replace('/[ \t]+/', ' ', $text));
}

function markdown_block(DOMElement $element): string
{
    $tag = strtolower($element->tagName);
    $content = markdown_text($element);

    if ($tag === 'time') {
        return $content !== '' ? 'Published ' . $content . '.' : '';
    }

    if (in_array($tag, ['p', 'div', 'figure'], true)) {
        return $content;
    }

    return '';
}

echo "# the Machine in the Garden\n\n";
echo "> the Machine in the Garden homepage with band information, recent news, live-show status, and booking details.\n\n";

foreach ($main->childNodes as $child) {
    if (!$child instanceof DOMElement || strtolower($child->tagName) !== 'section') {
        continue;
    }

    $heading = $child->getElementsByTagName('h2')->item(0);
    if (!$heading) {
        continue;
    }

    echo '## ' . markdown_text($heading) . "\n\n";

    foreach ($child->childNodes as $sectionChild) {
        if (!$sectionChild instanceof DOMElement) {
            continue;
        }

        $tag = strtolower($sectionChild->tagName);
        if ($tag === 'h2') {
            continue;
        }

        if ($tag === 'h3') {
            echo '### ' . markdown_text($sectionChild) . "\n\n";
            continue;
        }

        $block = markdown_block($sectionChild);
        if ($block !== '') {
            echo $block . "\n\n";
        }
    }
}

echo "## Primary Pages\n\n";
$primaryNav = null;
foreach ($document->getElementsByTagName('nav') as $nav) {
    if (str_contains(' ' . $nav->getAttribute('class') . ' ', ' desktop ')) {
        $primaryNav = $nav;
        break;
    }
}

if ($primaryNav) {
    foreach ($primaryNav->getElementsByTagName('a') as $link) {
        $href = trim($link->getAttribute('href'));
        $label = markdown_text($link);
        if ($href === '' || $label === '' || preg_match('#^https?://#i', $href)) {
            continue;
        }

        $absoluteHref = 'https://www.tmitg.com/' . ltrim($href, '/');
        echo '- [' . $label . '](' . $absoluteHref . ")\n";
    }
}
?>
