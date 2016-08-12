<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88decdcab79ca4adc69bc0d5f168b1f1999b752f52d2b7c226dd9bcf0772464f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a4d46d406a903b66bde147841d60dd60e98a1582c3f28bcc9edbef90532079fe = $this->env->getExtension("native_profiler");
        $__internal_a4d46d406a903b66bde147841d60dd60e98a1582c3f28bcc9edbef90532079fe->enter($__internal_a4d46d406a903b66bde147841d60dd60e98a1582c3f28bcc9edbef90532079fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d46d406a903b66bde147841d60dd60e98a1582c3f28bcc9edbef90532079fe->leave($__internal_a4d46d406a903b66bde147841d60dd60e98a1582c3f28bcc9edbef90532079fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c5b2d3b3c0b3563ff1bb790890bcd5c7b14f2c1e2c77ef66f8d56d428df8580 = $this->env->getExtension("native_profiler");
        $__internal_7c5b2d3b3c0b3563ff1bb790890bcd5c7b14f2c1e2c77ef66f8d56d428df8580->enter($__internal_7c5b2d3b3c0b3563ff1bb790890bcd5c7b14f2c1e2c77ef66f8d56d428df8580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c5b2d3b3c0b3563ff1bb790890bcd5c7b14f2c1e2c77ef66f8d56d428df8580->leave($__internal_7c5b2d3b3c0b3563ff1bb790890bcd5c7b14f2c1e2c77ef66f8d56d428df8580_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aca4ffe61293a9f987042c4d7b1624c3ff24132c3233449004f743c6d6767e31 = $this->env->getExtension("native_profiler");
        $__internal_aca4ffe61293a9f987042c4d7b1624c3ff24132c3233449004f743c6d6767e31->enter($__internal_aca4ffe61293a9f987042c4d7b1624c3ff24132c3233449004f743c6d6767e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aca4ffe61293a9f987042c4d7b1624c3ff24132c3233449004f743c6d6767e31->leave($__internal_aca4ffe61293a9f987042c4d7b1624c3ff24132c3233449004f743c6d6767e31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e830bd3e6e3fc70f1c944908ff9ff89ec10fb92dd0353a16922927c0795330fe = $this->env->getExtension("native_profiler");
        $__internal_e830bd3e6e3fc70f1c944908ff9ff89ec10fb92dd0353a16922927c0795330fe->enter($__internal_e830bd3e6e3fc70f1c944908ff9ff89ec10fb92dd0353a16922927c0795330fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e830bd3e6e3fc70f1c944908ff9ff89ec10fb92dd0353a16922927c0795330fe->leave($__internal_e830bd3e6e3fc70f1c944908ff9ff89ec10fb92dd0353a16922927c0795330fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
