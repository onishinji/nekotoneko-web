<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_296e5b16a2b5852bfe70d3a230a72466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configure.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/logo-small.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
            </div>
            <div id=\"symfony-content\">
                ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"version\">Symfony Standard Edition v.";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  260 => 235,  257 => 234,  40 => 11,  53 => 17,  20 => 1,  23 => 3,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 219,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  107 => 37,  97 => 23,  209 => 77,  176 => 61,  170 => 60,  90 => 41,  77 => 25,  62 => 16,  56 => 15,  188 => 66,  174 => 58,  167 => 64,  164 => 63,  134 => 54,  87 => 33,  49 => 15,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  238 => 218,  228 => 87,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  158 => 56,  148 => 74,  140 => 42,  128 => 45,  125 => 44,  113 => 40,  110 => 38,  86 => 29,  69 => 15,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 7,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 18,  61 => 18,  47 => 15,  105 => 24,  93 => 42,  76 => 34,  72 => 21,  68 => 30,  27 => 5,  91 => 34,  84 => 27,  94 => 39,  88 => 30,  79 => 35,  59 => 21,  21 => 1,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 44,  114 => 42,  104 => 37,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  26 => 3,  24 => 2,  25 => 3,  19 => 1,  70 => 13,  63 => 6,  46 => 14,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 35,  101 => 33,  96 => 35,  83 => 28,  80 => 32,  74 => 22,  66 => 19,  55 => 15,  52 => 18,  50 => 16,  43 => 12,  41 => 12,  37 => 7,  35 => 7,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 43,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 31,  89 => 28,  85 => 24,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 17,  51 => 16,  48 => 11,  45 => 11,  42 => 8,  39 => 9,  36 => 9,  33 => 6,  30 => 7,);
    }
}
