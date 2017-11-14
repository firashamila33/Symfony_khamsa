<?php

/* base.html.twig */
class __TwigTemplate_f48ee6ba362d9a7b826431586c9c8424360cf32655b627a8048cc7acb5f64014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c15906a75c1ba302120da81b3c3e0fa9ef4f4c7fd474632f05a77952c5451f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c15906a75c1ba302120da81b3c3e0fa9ef4f4c7fd474632f05a77952c5451f2->enter($__internal_0c15906a75c1ba302120da81b3c3e0fa9ef4f4c7fd474632f05a77952c5451f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1294e75e42aae35bb98d395a9092af6d94c3c49ac01a7e15aecd761d993c5ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1294e75e42aae35bb98d395a9092af6d94c3c49ac01a7e15aecd761d993c5ed8->enter($__internal_1294e75e42aae35bb98d395a9092af6d94c3c49ac01a7e15aecd761d993c5ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c15906a75c1ba302120da81b3c3e0fa9ef4f4c7fd474632f05a77952c5451f2->leave($__internal_0c15906a75c1ba302120da81b3c3e0fa9ef4f4c7fd474632f05a77952c5451f2_prof);

        
        $__internal_1294e75e42aae35bb98d395a9092af6d94c3c49ac01a7e15aecd761d993c5ed8->leave($__internal_1294e75e42aae35bb98d395a9092af6d94c3c49ac01a7e15aecd761d993c5ed8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40cf9153061a7651f9b63575dae6319dd8da929a3cadef36f55c1f965434d894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cf9153061a7651f9b63575dae6319dd8da929a3cadef36f55c1f965434d894->enter($__internal_40cf9153061a7651f9b63575dae6319dd8da929a3cadef36f55c1f965434d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92b4ffa204df3765f9a3d8fc0b11ea36ad35da70732bf212ed0bfd484840705d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b4ffa204df3765f9a3d8fc0b11ea36ad35da70732bf212ed0bfd484840705d->enter($__internal_92b4ffa204df3765f9a3d8fc0b11ea36ad35da70732bf212ed0bfd484840705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_92b4ffa204df3765f9a3d8fc0b11ea36ad35da70732bf212ed0bfd484840705d->leave($__internal_92b4ffa204df3765f9a3d8fc0b11ea36ad35da70732bf212ed0bfd484840705d_prof);

        
        $__internal_40cf9153061a7651f9b63575dae6319dd8da929a3cadef36f55c1f965434d894->leave($__internal_40cf9153061a7651f9b63575dae6319dd8da929a3cadef36f55c1f965434d894_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecd37ed04883811c6f6a0e8f1d108377909b2f466f7822380e0783ca0dd54fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd37ed04883811c6f6a0e8f1d108377909b2f466f7822380e0783ca0dd54fa7->enter($__internal_ecd37ed04883811c6f6a0e8f1d108377909b2f466f7822380e0783ca0dd54fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0dae2f31d5f069c9f19f0f814805b03b879d2034df4acec056f9b93a6d52d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dae2f31d5f069c9f19f0f814805b03b879d2034df4acec056f9b93a6d52d1a1->enter($__internal_0dae2f31d5f069c9f19f0f814805b03b879d2034df4acec056f9b93a6d52d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0dae2f31d5f069c9f19f0f814805b03b879d2034df4acec056f9b93a6d52d1a1->leave($__internal_0dae2f31d5f069c9f19f0f814805b03b879d2034df4acec056f9b93a6d52d1a1_prof);

        
        $__internal_ecd37ed04883811c6f6a0e8f1d108377909b2f466f7822380e0783ca0dd54fa7->leave($__internal_ecd37ed04883811c6f6a0e8f1d108377909b2f466f7822380e0783ca0dd54fa7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a162274dae5d43d35122d5500f252756f0f644f734bce9748a2bcf4ca2ba67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a162274dae5d43d35122d5500f252756f0f644f734bce9748a2bcf4ca2ba67->enter($__internal_e5a162274dae5d43d35122d5500f252756f0f644f734bce9748a2bcf4ca2ba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_710f0d2781a76dabd5b19a2fda3752c1697d6b36a64c90cd33c830c0fb210aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710f0d2781a76dabd5b19a2fda3752c1697d6b36a64c90cd33c830c0fb210aba->enter($__internal_710f0d2781a76dabd5b19a2fda3752c1697d6b36a64c90cd33c830c0fb210aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_710f0d2781a76dabd5b19a2fda3752c1697d6b36a64c90cd33c830c0fb210aba->leave($__internal_710f0d2781a76dabd5b19a2fda3752c1697d6b36a64c90cd33c830c0fb210aba_prof);

        
        $__internal_e5a162274dae5d43d35122d5500f252756f0f644f734bce9748a2bcf4ca2ba67->leave($__internal_e5a162274dae5d43d35122d5500f252756f0f644f734bce9748a2bcf4ca2ba67_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e1fced1e815bb559864a7a3ea9eaeb684118b1df1488ad72d238be3e0f6cf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1fced1e815bb559864a7a3ea9eaeb684118b1df1488ad72d238be3e0f6cf50->enter($__internal_5e1fced1e815bb559864a7a3ea9eaeb684118b1df1488ad72d238be3e0f6cf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7b09f97ef8dbe10ee82ffb63c0f21f137b2a92226fa1389f72dbc9acb7f55e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b09f97ef8dbe10ee82ffb63c0f21f137b2a92226fa1389f72dbc9acb7f55e4->enter($__internal_d7b09f97ef8dbe10ee82ffb63c0f21f137b2a92226fa1389f72dbc9acb7f55e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7b09f97ef8dbe10ee82ffb63c0f21f137b2a92226fa1389f72dbc9acb7f55e4->leave($__internal_d7b09f97ef8dbe10ee82ffb63c0f21f137b2a92226fa1389f72dbc9acb7f55e4_prof);

        
        $__internal_5e1fced1e815bb559864a7a3ea9eaeb684118b1df1488ad72d238be3e0f6cf50->leave($__internal_5e1fced1e815bb559864a7a3ea9eaeb684118b1df1488ad72d238be3e0f6cf50_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
