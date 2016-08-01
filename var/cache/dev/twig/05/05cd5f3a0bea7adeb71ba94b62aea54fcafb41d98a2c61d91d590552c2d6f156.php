<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dcfa02f8b188c8adc47c0a31056616d919a47dd80adb20503bfed245708f4982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2b77f368137479e30f07e68b9dacd475d2ec52d9adc5133ccd524d0ca253417 = $this->env->getExtension("native_profiler");
        $__internal_b2b77f368137479e30f07e68b9dacd475d2ec52d9adc5133ccd524d0ca253417->enter($__internal_b2b77f368137479e30f07e68b9dacd475d2ec52d9adc5133ccd524d0ca253417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b77f368137479e30f07e68b9dacd475d2ec52d9adc5133ccd524d0ca253417->leave($__internal_b2b77f368137479e30f07e68b9dacd475d2ec52d9adc5133ccd524d0ca253417_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71f8b5cfe6eb2e1352b0560f1307cae2eaf86eab45f5bf340f753c9088530f45 = $this->env->getExtension("native_profiler");
        $__internal_71f8b5cfe6eb2e1352b0560f1307cae2eaf86eab45f5bf340f753c9088530f45->enter($__internal_71f8b5cfe6eb2e1352b0560f1307cae2eaf86eab45f5bf340f753c9088530f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71f8b5cfe6eb2e1352b0560f1307cae2eaf86eab45f5bf340f753c9088530f45->leave($__internal_71f8b5cfe6eb2e1352b0560f1307cae2eaf86eab45f5bf340f753c9088530f45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee33cf02d2a59ced048ed112a81a4897c6ccf2da29b82a948c7e4ef92dc19b8c = $this->env->getExtension("native_profiler");
        $__internal_ee33cf02d2a59ced048ed112a81a4897c6ccf2da29b82a948c7e4ef92dc19b8c->enter($__internal_ee33cf02d2a59ced048ed112a81a4897c6ccf2da29b82a948c7e4ef92dc19b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee33cf02d2a59ced048ed112a81a4897c6ccf2da29b82a948c7e4ef92dc19b8c->leave($__internal_ee33cf02d2a59ced048ed112a81a4897c6ccf2da29b82a948c7e4ef92dc19b8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ac6a1e1037a0ad356e800f734ed9f89f969fb5d0c769294a84d269afe5dbdcc = $this->env->getExtension("native_profiler");
        $__internal_3ac6a1e1037a0ad356e800f734ed9f89f969fb5d0c769294a84d269afe5dbdcc->enter($__internal_3ac6a1e1037a0ad356e800f734ed9f89f969fb5d0c769294a84d269afe5dbdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ac6a1e1037a0ad356e800f734ed9f89f969fb5d0c769294a84d269afe5dbdcc->leave($__internal_3ac6a1e1037a0ad356e800f734ed9f89f969fb5d0c769294a84d269afe5dbdcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
