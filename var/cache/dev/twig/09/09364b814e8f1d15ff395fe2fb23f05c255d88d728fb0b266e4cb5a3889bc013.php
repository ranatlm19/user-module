<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_da6635ab030d080b24e402288e6363c4b57a220cff40125584c7521d38bdb6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa8d32851695e823bc6bb18b5e4125ab3f221d05a7ad0f724d3c3b719f691e5a = $this->env->getExtension("native_profiler");
        $__internal_aa8d32851695e823bc6bb18b5e4125ab3f221d05a7ad0f724d3c3b719f691e5a->enter($__internal_aa8d32851695e823bc6bb18b5e4125ab3f221d05a7ad0f724d3c3b719f691e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8d32851695e823bc6bb18b5e4125ab3f221d05a7ad0f724d3c3b719f691e5a->leave($__internal_aa8d32851695e823bc6bb18b5e4125ab3f221d05a7ad0f724d3c3b719f691e5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_971e24ac57deb3660dd9bcc97e60e789f39115cecf77c3c1e13915fd2a61bb48 = $this->env->getExtension("native_profiler");
        $__internal_971e24ac57deb3660dd9bcc97e60e789f39115cecf77c3c1e13915fd2a61bb48->enter($__internal_971e24ac57deb3660dd9bcc97e60e789f39115cecf77c3c1e13915fd2a61bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_971e24ac57deb3660dd9bcc97e60e789f39115cecf77c3c1e13915fd2a61bb48->leave($__internal_971e24ac57deb3660dd9bcc97e60e789f39115cecf77c3c1e13915fd2a61bb48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c6ed8cacfff908e05f5045a031d52d9648b5baa3b8ae79e6f02f636df3d44c3 = $this->env->getExtension("native_profiler");
        $__internal_3c6ed8cacfff908e05f5045a031d52d9648b5baa3b8ae79e6f02f636df3d44c3->enter($__internal_3c6ed8cacfff908e05f5045a031d52d9648b5baa3b8ae79e6f02f636df3d44c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3c6ed8cacfff908e05f5045a031d52d9648b5baa3b8ae79e6f02f636df3d44c3->leave($__internal_3c6ed8cacfff908e05f5045a031d52d9648b5baa3b8ae79e6f02f636df3d44c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0749b552023e6e694d9408a29cff47a621931d6dbda6a772205b732592c18a2 = $this->env->getExtension("native_profiler");
        $__internal_d0749b552023e6e694d9408a29cff47a621931d6dbda6a772205b732592c18a2->enter($__internal_d0749b552023e6e694d9408a29cff47a621931d6dbda6a772205b732592c18a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0749b552023e6e694d9408a29cff47a621931d6dbda6a772205b732592c18a2->leave($__internal_d0749b552023e6e694d9408a29cff47a621931d6dbda6a772205b732592c18a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
