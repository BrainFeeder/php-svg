<?php

$svg_path = dirname(__FILE__);

// general nodes
include($svg_path.'/nodes/SVGNode.php');
include($svg_path.'/nodes/SVGNodeContainer.php');

// structures
include($svg_path.'/nodes/structures/SVGDocumentFragment.php');
include($svg_path.'/nodes/structures/SVGGroup.php');

// shapes
include($svg_path.'/nodes/shapes/SVGRect.php');

// image
include($svg_path.'/SVGImage.php');