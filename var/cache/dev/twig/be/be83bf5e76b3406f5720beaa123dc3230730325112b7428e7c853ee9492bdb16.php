<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f381cb8ecdcac1815b646dff677daf1316dd7e7eb7e2c230a39d093b990eb5e0 extends Twig_Template
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
        $__internal_6bd06636e003811bbaa91470d7a6b66b8d2d75532bbaf272d556ed8bafe28c0b = $this->env->getExtension("native_profiler");
        $__internal_6bd06636e003811bbaa91470d7a6b66b8d2d75532bbaf272d556ed8bafe28c0b->enter($__internal_6bd06636e003811bbaa91470d7a6b66b8d2d75532bbaf272d556ed8bafe28c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd06636e003811bbaa91470d7a6b66b8d2d75532bbaf272d556ed8bafe28c0b->leave($__internal_6bd06636e003811bbaa91470d7a6b66b8d2d75532bbaf272d556ed8bafe28c0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28242e035750cf7477402a6099757007d6734d8c433cdc3baaa31299f664c8fd = $this->env->getExtension("native_profiler");
        $__internal_28242e035750cf7477402a6099757007d6734d8c433cdc3baaa31299f664c8fd->enter($__internal_28242e035750cf7477402a6099757007d6734d8c433cdc3baaa31299f664c8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28242e035750cf7477402a6099757007d6734d8c433cdc3baaa31299f664c8fd->leave($__internal_28242e035750cf7477402a6099757007d6734d8c433cdc3baaa31299f664c8fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c0c6b9fabbd20de29c490e248d31918051a96a21383eb101fa23c9d01c813aa = $this->env->getExtension("native_profiler");
        $__internal_0c0c6b9fabbd20de29c490e248d31918051a96a21383eb101fa23c9d01c813aa->enter($__internal_0c0c6b9fabbd20de29c490e248d31918051a96a21383eb101fa23c9d01c813aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c0c6b9fabbd20de29c490e248d31918051a96a21383eb101fa23c9d01c813aa->leave($__internal_0c0c6b9fabbd20de29c490e248d31918051a96a21383eb101fa23c9d01c813aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16d6dfa196458766da91336105b042b1700176336eb4d0b1a692bbc99b70b5df = $this->env->getExtension("native_profiler");
        $__internal_16d6dfa196458766da91336105b042b1700176336eb4d0b1a692bbc99b70b5df->enter($__internal_16d6dfa196458766da91336105b042b1700176336eb4d0b1a692bbc99b70b5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16d6dfa196458766da91336105b042b1700176336eb4d0b1a692bbc99b70b5df->leave($__internal_16d6dfa196458766da91336105b042b1700176336eb4d0b1a692bbc99b70b5df_prof);

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
