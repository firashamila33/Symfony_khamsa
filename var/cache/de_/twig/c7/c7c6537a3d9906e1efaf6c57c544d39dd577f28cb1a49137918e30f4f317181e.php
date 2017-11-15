<?php

/* @FrontEnd/Revision/RevisionAccueil.html.twig */
class __TwigTemplate_89d110f93507d6045ee7e1603abb9cc7361d4f8fabdb9535a0a8d194c60c9a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Revision/RevisionAccueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32a68c0e2d3f2e86e4247639541fc113664b61e1741732d6dc0b39a985df6441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a68c0e2d3f2e86e4247639541fc113664b61e1741732d6dc0b39a985df6441->enter($__internal_32a68c0e2d3f2e86e4247639541fc113664b61e1741732d6dc0b39a985df6441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Revision/RevisionAccueil.html.twig"));

        $__internal_34358e036422b65e329e075dc9d97f14dcf9dc48ad93373b82bb051d000a2945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34358e036422b65e329e075dc9d97f14dcf9dc48ad93373b82bb051d000a2945->enter($__internal_34358e036422b65e329e075dc9d97f14dcf9dc48ad93373b82bb051d000a2945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Revision/RevisionAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a68c0e2d3f2e86e4247639541fc113664b61e1741732d6dc0b39a985df6441->leave($__internal_32a68c0e2d3f2e86e4247639541fc113664b61e1741732d6dc0b39a985df6441_prof);

        
        $__internal_34358e036422b65e329e075dc9d97f14dcf9dc48ad93373b82bb051d000a2945->leave($__internal_34358e036422b65e329e075dc9d97f14dcf9dc48ad93373b82bb051d000a2945_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b52cc5cd73afc695744691bb83436d277375da268a72046840fb1c25a46c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b52cc5cd73afc695744691bb83436d277375da268a72046840fb1c25a46c65->enter($__internal_c6b52cc5cd73afc695744691bb83436d277375da268a72046840fb1c25a46c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b140f495b68b512d9ab4ffb5aab48b01c3f1b514f25a4d136811f369bb85139b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b140f495b68b512d9ab4ffb5aab48b01c3f1b514f25a4d136811f369bb85139b->enter($__internal_b140f495b68b512d9ab4ffb5aab48b01c3f1b514f25a4d136811f369bb85139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Revision</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>

";
        
        $__internal_b140f495b68b512d9ab4ffb5aab48b01c3f1b514f25a4d136811f369bb85139b->leave($__internal_b140f495b68b512d9ab4ffb5aab48b01c3f1b514f25a4d136811f369bb85139b_prof);

        
        $__internal_c6b52cc5cd73afc695744691bb83436d277375da268a72046840fb1c25a46c65->leave($__internal_c6b52cc5cd73afc695744691bb83436d277375da268a72046840fb1c25a46c65_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Revision/RevisionAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontEndBundle::Layout.html.twig' %}
{% block body %}
    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Revision</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>

{% endblock body %}", "@FrontEnd/Revision/RevisionAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Revision\\RevisionAccueil.html.twig");
    }
}
