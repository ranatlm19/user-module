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
        $__internal_079e71a6fcf5b6724110b16ceeb7ac04f365d364844536527adbf95dfc4b09e1 = $this->env->getExtension("native_profiler");
        $__internal_079e71a6fcf5b6724110b16ceeb7ac04f365d364844536527adbf95dfc4b09e1->enter($__internal_079e71a6fcf5b6724110b16ceeb7ac04f365d364844536527adbf95dfc4b09e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079e71a6fcf5b6724110b16ceeb7ac04f365d364844536527adbf95dfc4b09e1->leave($__internal_079e71a6fcf5b6724110b16ceeb7ac04f365d364844536527adbf95dfc4b09e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc9e4d395b60b088ac6a50a40c6f95c374b9ec1fea9f4928fb190b5d35bd4fcd = $this->env->getExtension("native_profiler");
        $__internal_bc9e4d395b60b088ac6a50a40c6f95c374b9ec1fea9f4928fb190b5d35bd4fcd->enter($__internal_bc9e4d395b60b088ac6a50a40c6f95c374b9ec1fea9f4928fb190b5d35bd4fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc9e4d395b60b088ac6a50a40c6f95c374b9ec1fea9f4928fb190b5d35bd4fcd->leave($__internal_bc9e4d395b60b088ac6a50a40c6f95c374b9ec1fea9f4928fb190b5d35bd4fcd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a16195cca455cd871997878b31b6dc6a43ecd8f95ee8d266012a6818a775d403 = $this->env->getExtension("native_profiler");
        $__internal_a16195cca455cd871997878b31b6dc6a43ecd8f95ee8d266012a6818a775d403->enter($__internal_a16195cca455cd871997878b31b6dc6a43ecd8f95ee8d266012a6818a775d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a16195cca455cd871997878b31b6dc6a43ecd8f95ee8d266012a6818a775d403->leave($__internal_a16195cca455cd871997878b31b6dc6a43ecd8f95ee8d266012a6818a775d403_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_541a3be78c1eb8e43901c719340724712ab84f7a083bfa7923e55b593fbfb8b5 = $this->env->getExtension("native_profiler");
        $__internal_541a3be78c1eb8e43901c719340724712ab84f7a083bfa7923e55b593fbfb8b5->enter($__internal_541a3be78c1eb8e43901c719340724712ab84f7a083bfa7923e55b593fbfb8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_541a3be78c1eb8e43901c719340724712ab84f7a083bfa7923e55b593fbfb8b5->leave($__internal_541a3be78c1eb8e43901c719340724712ab84f7a083bfa7923e55b593fbfb8b5_prof);

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
