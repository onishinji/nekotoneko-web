<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_995c0ddba861df8a4351da8af20d1efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  62 => 16,  56 => 13,  188 => 69,  174 => 67,  167 => 64,  164 => 63,  134 => 54,  87 => 34,  49 => 13,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  238 => 97,  228 => 89,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 69,  158 => 56,  148 => 52,  140 => 49,  128 => 45,  125 => 44,  113 => 40,  110 => 42,  86 => 29,  69 => 20,  301 => 100,  295 => 133,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 5,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 23,  61 => 16,  47 => 9,  105 => 24,  93 => 31,  76 => 22,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 8,  31 => 5,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 48,  127 => 52,  121 => 45,  118 => 44,  114 => 42,  104 => 39,  100 => 35,  78 => 24,  75 => 23,  71 => 21,  58 => 14,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 24,  63 => 24,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 46,  123 => 47,  120 => 50,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 28,  80 => 32,  74 => 16,  66 => 19,  55 => 15,  52 => 14,  50 => 10,  43 => 7,  41 => 7,  37 => 8,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 60,  162 => 57,  157 => 56,  153 => 62,  151 => 53,  143 => 54,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 38,  108 => 41,  102 => 30,  98 => 22,  95 => 36,  92 => 28,  89 => 29,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 16,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
