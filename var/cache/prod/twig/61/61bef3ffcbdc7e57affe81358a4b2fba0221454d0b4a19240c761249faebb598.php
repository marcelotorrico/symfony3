<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7dba48bfaa88bf225f25f31ba47f010eba712861ce3a748b61adbc986b210803 extends Twig_Template
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
        $__internal_276ee4b9141af08e074b9f0f8966a81c4442f37186e3eba2a9faa5df67c5390e = $this->env->getExtension("native_profiler");
        $__internal_276ee4b9141af08e074b9f0f8966a81c4442f37186e3eba2a9faa5df67c5390e->enter($__internal_276ee4b9141af08e074b9f0f8966a81c4442f37186e3eba2a9faa5df67c5390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276ee4b9141af08e074b9f0f8966a81c4442f37186e3eba2a9faa5df67c5390e->leave($__internal_276ee4b9141af08e074b9f0f8966a81c4442f37186e3eba2a9faa5df67c5390e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5cfa83dd2d39b2cb3e922a35f76c1ee1d4915be050b0d30bf66bc16349fec1e = $this->env->getExtension("native_profiler");
        $__internal_f5cfa83dd2d39b2cb3e922a35f76c1ee1d4915be050b0d30bf66bc16349fec1e->enter($__internal_f5cfa83dd2d39b2cb3e922a35f76c1ee1d4915be050b0d30bf66bc16349fec1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5cfa83dd2d39b2cb3e922a35f76c1ee1d4915be050b0d30bf66bc16349fec1e->leave($__internal_f5cfa83dd2d39b2cb3e922a35f76c1ee1d4915be050b0d30bf66bc16349fec1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d81c2d8d97a4b0ed044e0e1e8f115aedd076ba20d214d62255af472ed505bd36 = $this->env->getExtension("native_profiler");
        $__internal_d81c2d8d97a4b0ed044e0e1e8f115aedd076ba20d214d62255af472ed505bd36->enter($__internal_d81c2d8d97a4b0ed044e0e1e8f115aedd076ba20d214d62255af472ed505bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d81c2d8d97a4b0ed044e0e1e8f115aedd076ba20d214d62255af472ed505bd36->leave($__internal_d81c2d8d97a4b0ed044e0e1e8f115aedd076ba20d214d62255af472ed505bd36_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6c8de94e2254cd404414392a920e0796b8ea354dc5ece2501472f2881f33ab = $this->env->getExtension("native_profiler");
        $__internal_8b6c8de94e2254cd404414392a920e0796b8ea354dc5ece2501472f2881f33ab->enter($__internal_8b6c8de94e2254cd404414392a920e0796b8ea354dc5ece2501472f2881f33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b6c8de94e2254cd404414392a920e0796b8ea354dc5ece2501472f2881f33ab->leave($__internal_8b6c8de94e2254cd404414392a920e0796b8ea354dc5ece2501472f2881f33ab_prof);

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
