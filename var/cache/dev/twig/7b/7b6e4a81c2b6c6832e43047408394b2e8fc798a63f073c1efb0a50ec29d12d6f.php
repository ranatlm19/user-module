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
        $__internal_e5535f6c1a72cdbe8a787631ccc5fa3ac5d31bd43692bde2acc02f61ee101cf4 = $this->env->getExtension("native_profiler");
        $__internal_e5535f6c1a72cdbe8a787631ccc5fa3ac5d31bd43692bde2acc02f61ee101cf4->enter($__internal_e5535f6c1a72cdbe8a787631ccc5fa3ac5d31bd43692bde2acc02f61ee101cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5535f6c1a72cdbe8a787631ccc5fa3ac5d31bd43692bde2acc02f61ee101cf4->leave($__internal_e5535f6c1a72cdbe8a787631ccc5fa3ac5d31bd43692bde2acc02f61ee101cf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6c81e26d44d4e654c547497b52c00080463fcdb2360e78a9577f647194c0cf1 = $this->env->getExtension("native_profiler");
        $__internal_b6c81e26d44d4e654c547497b52c00080463fcdb2360e78a9577f647194c0cf1->enter($__internal_b6c81e26d44d4e654c547497b52c00080463fcdb2360e78a9577f647194c0cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6c81e26d44d4e654c547497b52c00080463fcdb2360e78a9577f647194c0cf1->leave($__internal_b6c81e26d44d4e654c547497b52c00080463fcdb2360e78a9577f647194c0cf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f982b32874be18df3584c091ce959e749d2705e7b6a348b3f89dc702f078083 = $this->env->getExtension("native_profiler");
        $__internal_7f982b32874be18df3584c091ce959e749d2705e7b6a348b3f89dc702f078083->enter($__internal_7f982b32874be18df3584c091ce959e749d2705e7b6a348b3f89dc702f078083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f982b32874be18df3584c091ce959e749d2705e7b6a348b3f89dc702f078083->leave($__internal_7f982b32874be18df3584c091ce959e749d2705e7b6a348b3f89dc702f078083_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b363c47ee1ec82be0b8bb29c5ed598de4929a4394ea42883ff70e8209e1af202 = $this->env->getExtension("native_profiler");
        $__internal_b363c47ee1ec82be0b8bb29c5ed598de4929a4394ea42883ff70e8209e1af202->enter($__internal_b363c47ee1ec82be0b8bb29c5ed598de4929a4394ea42883ff70e8209e1af202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b363c47ee1ec82be0b8bb29c5ed598de4929a4394ea42883ff70e8209e1af202->leave($__internal_b363c47ee1ec82be0b8bb29c5ed598de4929a4394ea42883ff70e8209e1af202_prof);

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
