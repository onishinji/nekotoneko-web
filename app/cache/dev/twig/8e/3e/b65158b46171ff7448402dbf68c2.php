<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_8e3eb65158b46171ff7448402dbf68c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Exception</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 23
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 24
            echo "        <span class=\"count\">
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 28
        echo "</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Logs</h2>

    ";
        // line 34
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 35
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 45
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
            echo ((($this->getContext($context, "value") == $this->getContext($context, "priority"))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "text"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 56
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 57
            echo "        <ul class=\"alt\">
            ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (($this->getAttribute($this->getContext($context, "log"), "priority") >= $this->getContext($context, "priority"))) {
                    // line 59
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                    if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                    echo "
                    ";
                    // line 61
                    if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                        // line 62
                        echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "log"), "context")), "html", null, true);
                        echo "
                        </small>
                    ";
                    }
                    // line 67
                    echo "                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "        </ul>
    ";
        } else {
            // line 73
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  176 => 61,  170 => 60,  90 => 28,  77 => 24,  62 => 16,  56 => 13,  188 => 67,  174 => 67,  167 => 64,  164 => 63,  134 => 54,  87 => 34,  49 => 13,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  238 => 97,  228 => 89,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  158 => 56,  148 => 58,  140 => 49,  128 => 45,  125 => 44,  113 => 40,  110 => 42,  86 => 29,  69 => 20,  301 => 100,  295 => 133,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 69,  185 => 68,  183 => 60,  177 => 58,  160 => 59,  112 => 42,  82 => 24,  65 => 16,  38 => 5,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 23,  61 => 16,  47 => 9,  105 => 24,  93 => 31,  76 => 22,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 8,  31 => 5,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 44,  114 => 42,  104 => 35,  100 => 35,  78 => 24,  75 => 23,  71 => 20,  58 => 14,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 57,  139 => 50,  131 => 46,  123 => 47,  120 => 50,  115 => 44,  106 => 35,  101 => 36,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 10,  43 => 7,  41 => 7,  37 => 8,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 28,  89 => 29,  85 => 24,  81 => 24,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 12,  51 => 12,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
