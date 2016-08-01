<?php

/* MTDLoginBundle:Registro:inicio.html.twig */
class __TwigTemplate_db1f52131a69bc944f4266419f2dac56f216d5c8967c2e49840d964838d90d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Registro:inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f73bc2d3785cae2baadc57ab432a37e7759c38783c22ebe66ba16b4c806dbca1 = $this->env->getExtension("native_profiler");
        $__internal_f73bc2d3785cae2baadc57ab432a37e7759c38783c22ebe66ba16b4c806dbca1->enter($__internal_f73bc2d3785cae2baadc57ab432a37e7759c38783c22ebe66ba16b4c806dbca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Registro:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73bc2d3785cae2baadc57ab432a37e7759c38783c22ebe66ba16b4c806dbca1->leave($__internal_f73bc2d3785cae2baadc57ab432a37e7759c38783c22ebe66ba16b4c806dbca1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e05e6830a60e195b60334621b199f0def444feba46aac7a4a1a0281fbf20c23e = $this->env->getExtension("native_profiler");
        $__internal_e05e6830a60e195b60334621b199f0def444feba46aac7a4a1a0281fbf20c23e->enter($__internal_e05e6830a60e195b60334621b199f0def444feba46aac7a4a1a0281fbf20c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Bienvenido</h2>
        </div>
    </section>
";
        
        $__internal_e05e6830a60e195b60334621b199f0def444feba46aac7a4a1a0281fbf20c23e->leave($__internal_e05e6830a60e195b60334621b199f0def444feba46aac7a4a1a0281fbf20c23e_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Registro:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     */
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Bienvenido</h2>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
