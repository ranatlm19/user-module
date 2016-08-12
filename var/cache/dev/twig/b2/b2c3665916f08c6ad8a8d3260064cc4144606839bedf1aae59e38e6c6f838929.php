<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_824406d34da22688c38a03c3184cebaf86a46606a0dfa73158cda3b3c4509b9b extends Twig_Template
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
        $__internal_ca7f1f0c188580c5a01a8a79cad5c4de4d36db6a86bfb23da51a1dc053493461 = $this->env->getExtension("native_profiler");
        $__internal_ca7f1f0c188580c5a01a8a79cad5c4de4d36db6a86bfb23da51a1dc053493461->enter($__internal_ca7f1f0c188580c5a01a8a79cad5c4de4d36db6a86bfb23da51a1dc053493461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7f1f0c188580c5a01a8a79cad5c4de4d36db6a86bfb23da51a1dc053493461->leave($__internal_ca7f1f0c188580c5a01a8a79cad5c4de4d36db6a86bfb23da51a1dc053493461_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee2f375f5fecf03588a82bf349eb217540530aa116c9c54036c89b3d368245c4 = $this->env->getExtension("native_profiler");
        $__internal_ee2f375f5fecf03588a82bf349eb217540530aa116c9c54036c89b3d368245c4->enter($__internal_ee2f375f5fecf03588a82bf349eb217540530aa116c9c54036c89b3d368245c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee2f375f5fecf03588a82bf349eb217540530aa116c9c54036c89b3d368245c4->leave($__internal_ee2f375f5fecf03588a82bf349eb217540530aa116c9c54036c89b3d368245c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edf16c59380abb01b9720aac545eafc781fa45cc9cf096c2fcaf650840574b79 = $this->env->getExtension("native_profiler");
        $__internal_edf16c59380abb01b9720aac545eafc781fa45cc9cf096c2fcaf650840574b79->enter($__internal_edf16c59380abb01b9720aac545eafc781fa45cc9cf096c2fcaf650840574b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_edf16c59380abb01b9720aac545eafc781fa45cc9cf096c2fcaf650840574b79->leave($__internal_edf16c59380abb01b9720aac545eafc781fa45cc9cf096c2fcaf650840574b79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd964a61af159c7ead86dd50e91973002854eebc8eddbd377c8e882141958ca7 = $this->env->getExtension("native_profiler");
        $__internal_fd964a61af159c7ead86dd50e91973002854eebc8eddbd377c8e882141958ca7->enter($__internal_fd964a61af159c7ead86dd50e91973002854eebc8eddbd377c8e882141958ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd964a61af159c7ead86dd50e91973002854eebc8eddbd377c8e882141958ca7->leave($__internal_fd964a61af159c7ead86dd50e91973002854eebc8eddbd377c8e882141958ca7_prof);

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
