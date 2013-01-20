<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_ad6fca7d48c7ae1d7f704dd830d62cea extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (($this->getContext($context, "count") > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (($this->getContext($context, "count") - $this->getContext($context, "position")) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($this->getContext($context, "count") + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "', 'traces'); switchIcons('icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_open', 'icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("display") : ("hidden"));
            echo "\" />
                <img class=\"toggle\" id=\"icon_traces_";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces_link_";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list_exception\" id=\"traces_";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == $this->getContext($context, "count"))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => $this->getContext($context, "position"), "i" => $this->getContext($context, "i"), "trace" => $this->getContext($context, "trace")));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  93 => 20,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 19,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 10,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  78 => 28,  75 => 27,  71 => 26,  58 => 9,  34 => 11,  26 => 3,  24 => 3,  25 => 4,  19 => 1,  70 => 14,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 13,  52 => 15,  50 => 8,  43 => 7,  41 => 7,  37 => 8,  35 => 7,  32 => 4,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 31,  92 => 29,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 19,  60 => 23,  57 => 14,  54 => 6,  51 => 12,  48 => 14,  45 => 8,  42 => 6,  39 => 6,  36 => 7,  33 => 5,  30 => 3,);
    }
}
