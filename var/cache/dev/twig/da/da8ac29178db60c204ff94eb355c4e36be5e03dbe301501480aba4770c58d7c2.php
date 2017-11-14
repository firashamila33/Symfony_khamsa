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
        $__internal_c334d545acfe6948c30d29db82d982db2155979fbb44afa1695185885cf08c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c334d545acfe6948c30d29db82d982db2155979fbb44afa1695185885cf08c4d->enter($__internal_c334d545acfe6948c30d29db82d982db2155979fbb44afa1695185885cf08c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/ListClub.html.twig"));

        $__internal_4fe091e7e0277eaec99002cdd713fb25832ec33003f5bcb504c36c9ad74eb0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe091e7e0277eaec99002cdd713fb25832ec33003f5bcb504c36c9ad74eb0ca->enter($__internal_4fe091e7e0277eaec99002cdd713fb25832ec33003f5bcb504c36c9ad74eb0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/ListClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c334d545acfe6948c30d29db82d982db2155979fbb44afa1695185885cf08c4d->leave($__internal_c334d545acfe6948c30d29db82d982db2155979fbb44afa1695185885cf08c4d_prof);

        
        $__internal_4fe091e7e0277eaec99002cdd713fb25832ec33003f5bcb504c36c9ad74eb0ca->leave($__internal_4fe091e7e0277eaec99002cdd713fb25832ec33003f5bcb504c36c9ad74eb0ca_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0300f978f5c564937b7f4fd2bb53d0b2d8743b54232ff6cda375baf4ab6995e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0300f978f5c564937b7f4fd2bb53d0b2d8743b54232ff6cda375baf4ab6995e->enter($__internal_a0300f978f5c564937b7f4fd2bb53d0b2d8743b54232ff6cda375baf4ab6995e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_134bf5adaa9fdcb889247ab789539e9687e992ab008d1f03529fce81ec47bc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134bf5adaa9fdcb889247ab789539e9687e992ab008d1f03529fce81ec47bc12->enter($__internal_134bf5adaa9fdcb889247ab789539e9687e992ab008d1f03529fce81ec47bc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_134bf5adaa9fdcb889247ab789539e9687e992ab008d1f03529fce81ec47bc12->leave($__internal_134bf5adaa9fdcb889247ab789539e9687e992ab008d1f03529fce81ec47bc12_prof);

        
        $__internal_a0300f978f5c564937b7f4fd2bb53d0b2d8743b54232ff6cda375baf4ab6995e->leave($__internal_a0300f978f5c564937b7f4fd2bb53d0b2d8743b54232ff6cda375baf4ab6995e_prof);

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
