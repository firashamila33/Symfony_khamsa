<?php

/* @EspritForAllBackEnd/Club/ListClub.html.twig */
class __TwigTemplate_3fbc0433d87909f6ef5f561907e3ae824839d77a536c5197880bc675e5698531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritForAllBackEndBundle::BackEndAcceuil.html.twig", "@EspritForAllBackEnd/Club/ListClub.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritForAllBackEndBundle::BackEndAcceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1482ca265a2315cca83720d73382fad8f2acaf15cc61c481bae8d11e7c16c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1482ca265a2315cca83720d73382fad8f2acaf15cc61c481bae8d11e7c16c0->enter($__internal_2c1482ca265a2315cca83720d73382fad8f2acaf15cc61c481bae8d11e7c16c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/ListClub.html.twig"));

        $__internal_7d995dfea7ea2aa52e29dffaa20bc31184a3fdd7bf1ca3529bea3662098a0d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d995dfea7ea2aa52e29dffaa20bc31184a3fdd7bf1ca3529bea3662098a0d92->enter($__internal_7d995dfea7ea2aa52e29dffaa20bc31184a3fdd7bf1ca3529bea3662098a0d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/ListClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1482ca265a2315cca83720d73382fad8f2acaf15cc61c481bae8d11e7c16c0->leave($__internal_2c1482ca265a2315cca83720d73382fad8f2acaf15cc61c481bae8d11e7c16c0_prof);

        
        $__internal_7d995dfea7ea2aa52e29dffaa20bc31184a3fdd7bf1ca3529bea3662098a0d92->leave($__internal_7d995dfea7ea2aa52e29dffaa20bc31184a3fdd7bf1ca3529bea3662098a0d92_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8736662191e93eaa09bc596967ee7a0583c1a3979e196cb73c681fa5b93eadd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8736662191e93eaa09bc596967ee7a0583c1a3979e196cb73c681fa5b93eadd2->enter($__internal_8736662191e93eaa09bc596967ee7a0583c1a3979e196cb73c681fa5b93eadd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_275df7684eba221b499f2bae8ca1205291be36f0d486b473cdbabf83fbee6ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275df7684eba221b499f2bae8ca1205291be36f0d486b473cdbabf83fbee6ca7->enter($__internal_275df7684eba221b499f2bae8ca1205291be36f0d486b473cdbabf83fbee6ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/prism/prism.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/data-tables/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/chartist-js/chartist.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">

    <div class=\"col s12 m8 l9\">
<h5 align=\"center\">Liste des clubs</h5>
        <table id=\"data-table-row-grouping\" class=\"display\" cellspacing=\"0\" width=\"100%\">
        <thead><tr>
            <th>Id</th>
            <th>Libelle</th>
            <th>Description</th>
            <th>Path Image</th>
            <th>Path Couverture</th>
            <th>A propos</th>
            <th>Notre Histoire</th>
            <th colspan = \"2\">Option</th></tr></thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["club"] ?? $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "pathImg", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "pathCouverture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "apropos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "notreHistoire", array()), "html", null, true);
            echo "</td>
                <td><a href=\"\">Supprimer</a></td>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UpdateClub", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
       </table>
</div>


";
        
        $__internal_275df7684eba221b499f2bae8ca1205291be36f0d486b473cdbabf83fbee6ca7->leave($__internal_275df7684eba221b499f2bae8ca1205291be36f0d486b473cdbabf83fbee6ca7_prof);

        
        $__internal_8736662191e93eaa09bc596967ee7a0583c1a3979e196cb73c681fa5b93eadd2->leave($__internal_8736662191e93eaa09bc596967ee7a0583c1a3979e196cb73c681fa5b93eadd2_prof);

    }

    public function getTemplateName()
    {
        return "@EspritForAllBackEnd/Club/ListClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  116 => 31,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  80 => 21,  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EspritForAllBackEndBundle::BackEndAcceuil.html.twig\" %}
{% block body %}
    <link href=\"{{ asset('backend/js/plugins/prism/prism.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"{{ asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"{{ asset('backend/js/plugins/data-tables/css/jquery.dataTables.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">
    <link href=\"{{ asset('backend/js/plugins/chartist-js/chartist.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\">

    <div class=\"col s12 m8 l9\">
<h5 align=\"center\">Liste des clubs</h5>
        <table id=\"data-table-row-grouping\" class=\"display\" cellspacing=\"0\" width=\"100%\">
        <thead><tr>
            <th>Id</th>
            <th>Libelle</th>
            <th>Description</th>
            <th>Path Image</th>
            <th>Path Couverture</th>
            <th>A propos</th>
            <th>Notre Histoire</th>
            <th colspan = \"2\">Option</th></tr></thead>
        <tbody>
        {% for c in club %}
            <tr>
                <td>{{ c.id }}</td>
                <td>{{ c.libelle }}</td>
                <td>{{ c.description }}</td>
                <td>{{ c.pathImg }}</td>
                <td>{{ c.pathCouverture }}</td>
                <td>{{ c.apropos }}</td>
                <td>{{ c.notreHistoire }}</td>
                <td><a href=\"\">Supprimer</a></td>
                <td><a href=\"{{ path('UpdateClub',{'id':c.id}) }}\">Modifier</a></td>

            </tr>
        {% endfor %}
        </tbody>
       </table>
</div>


{%  endblock body %}


{#{{ path('UpdateModele',{'id':e.id}) }}\"#}", "@EspritForAllBackEnd/Club/ListClub.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\EspritForAll\\BackEndBundle\\Resources\\views\\Club\\ListClub.html.twig");
    }
}
