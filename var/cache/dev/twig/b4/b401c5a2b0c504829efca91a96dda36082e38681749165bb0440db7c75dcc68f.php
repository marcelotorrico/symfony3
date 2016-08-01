<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dbc73663498d7831ce430a5b1b3e5e81d565712a0c646aa68c5df72489d9552f extends Twig_Template
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
        $__internal_b2094c38fef7f023a6d9dd97b0e5939c58b48073cfbcbbb92a41bc7572b7dc40 = $this->env->getExtension("native_profiler");
        $__internal_b2094c38fef7f023a6d9dd97b0e5939c58b48073cfbcbbb92a41bc7572b7dc40->enter($__internal_b2094c38fef7f023a6d9dd97b0e5939c58b48073cfbcbbb92a41bc7572b7dc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2094c38fef7f023a6d9dd97b0e5939c58b48073cfbcbbb92a41bc7572b7dc40->leave($__internal_b2094c38fef7f023a6d9dd97b0e5939c58b48073cfbcbbb92a41bc7572b7dc40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7e3c8ca2558ddca2647ca56160c2560164772c7f5f88d6b1090b214f256b3e0 = $this->env->getExtension("native_profiler");
        $__internal_b7e3c8ca2558ddca2647ca56160c2560164772c7f5f88d6b1090b214f256b3e0->enter($__internal_b7e3c8ca2558ddca2647ca56160c2560164772c7f5f88d6b1090b214f256b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7e3c8ca2558ddca2647ca56160c2560164772c7f5f88d6b1090b214f256b3e0->leave($__internal_b7e3c8ca2558ddca2647ca56160c2560164772c7f5f88d6b1090b214f256b3e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6bd09ee59dd30b3f17eda38e78b02e547439a35ae95a22a349900552313b707 = $this->env->getExtension("native_profiler");
        $__internal_e6bd09ee59dd30b3f17eda38e78b02e547439a35ae95a22a349900552313b707->enter($__internal_e6bd09ee59dd30b3f17eda38e78b02e547439a35ae95a22a349900552313b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6bd09ee59dd30b3f17eda38e78b02e547439a35ae95a22a349900552313b707->leave($__internal_e6bd09ee59dd30b3f17eda38e78b02e547439a35ae95a22a349900552313b707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_555ab86f9295a668f5f3b3f2939c4fd2f08c6a69d49b67b899d2d87c603db4ec = $this->env->getExtension("native_profiler");
        $__internal_555ab86f9295a668f5f3b3f2939c4fd2f08c6a69d49b67b899d2d87c603db4ec->enter($__internal_555ab86f9295a668f5f3b3f2939c4fd2f08c6a69d49b67b899d2d87c603db4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_555ab86f9295a668f5f3b3f2939c4fd2f08c6a69d49b67b899d2d87c603db4ec->leave($__internal_555ab86f9295a668f5f3b3f2939c4fd2f08c6a69d49b67b899d2d87c603db4ec_prof);

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
