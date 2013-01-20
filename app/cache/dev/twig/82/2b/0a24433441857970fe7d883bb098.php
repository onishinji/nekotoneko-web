<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_822b0a24433441857970fe7d883bb098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  107 => 27,  97 => 23,  209 => 77,  176 => 61,  170 => 60,  90 => 41,  77 => 24,  62 => 27,  56 => 13,  188 => 66,  174 => 58,  167 => 64,  164 => 63,  134 => 54,  87 => 40,  49 => 13,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  238 => 97,  228 => 87,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  158 => 56,  148 => 74,  140 => 42,  128 => 45,  125 => 44,  113 => 40,  110 => 42,  86 => 29,  69 => 20,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 16,  38 => 18,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 21,  105 => 24,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 3,  91 => 35,  84 => 25,  94 => 39,  88 => 20,  79 => 35,  59 => 22,  21 => 2,  44 => 20,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 44,  114 => 42,  104 => 35,  100 => 24,  78 => 24,  75 => 23,  71 => 20,  58 => 25,  34 => 8,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 35,  101 => 45,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 22,  43 => 7,  41 => 19,  37 => 8,  35 => 6,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 43,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 43,  92 => 21,  89 => 29,  85 => 24,  81 => 24,  73 => 33,  64 => 17,  60 => 15,  57 => 16,  54 => 12,  51 => 16,  48 => 11,  45 => 13,  42 => 7,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
