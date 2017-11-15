<?php

/* ::base.html.twig */
class __TwigTemplate_4d5eb3cb3ee12bb2d22de85423fd5bb6cfacb303cc8fb418afa970d99cdf199f extends Twig_Template
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
        $__internal_6b05fc365e13c213e242c57a304845cc6cdb1cfbbfe3a5b037aef320d8c51f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b05fc365e13c213e242c57a304845cc6cdb1cfbbfe3a5b037aef320d8c51f31->enter($__internal_6b05fc365e13c213e242c57a304845cc6cdb1cfbbfe3a5b037aef320d8c51f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e06da53ab4a4d330bf2836bcf4a34ef0454677ed241a013c8e6370a13686dadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06da53ab4a4d330bf2836bcf4a34ef0454677ed241a013c8e6370a13686dadd->enter($__internal_e06da53ab4a4d330bf2836bcf4a34ef0454677ed241a013c8e6370a13686dadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6b05fc365e13c213e242c57a304845cc6cdb1cfbbfe3a5b037aef320d8c51f31->leave($__internal_6b05fc365e13c213e242c57a304845cc6cdb1cfbbfe3a5b037aef320d8c51f31_prof);

        
        $__internal_e06da53ab4a4d330bf2836bcf4a34ef0454677ed241a013c8e6370a13686dadd->leave($__internal_e06da53ab4a4d330bf2836bcf4a34ef0454677ed241a013c8e6370a13686dadd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7667b680c01408af53fed5b3a3f4c60cc079af57ed963debe76443a260455b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7667b680c01408af53fed5b3a3f4c60cc079af57ed963debe76443a260455b43->enter($__internal_7667b680c01408af53fed5b3a3f4c60cc079af57ed963debe76443a260455b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d68a18204a0102a178f61ddebab36daf2ad8bf3d81b68912ba3436613743a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d68a18204a0102a178f61ddebab36daf2ad8bf3d81b68912ba3436613743a89->enter($__internal_1d68a18204a0102a178f61ddebab36daf2ad8bf3d81b68912ba3436613743a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d68a18204a0102a178f61ddebab36daf2ad8bf3d81b68912ba3436613743a89->leave($__internal_1d68a18204a0102a178f61ddebab36daf2ad8bf3d81b68912ba3436613743a89_prof);

        
        $__internal_7667b680c01408af53fed5b3a3f4c60cc079af57ed963debe76443a260455b43->leave($__internal_7667b680c01408af53fed5b3a3f4c60cc079af57ed963debe76443a260455b43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3343acd436fd0a30ad7b8f9e4b8ca8f0f0dc2da112a43b6bd89abbc21b4be3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3343acd436fd0a30ad7b8f9e4b8ca8f0f0dc2da112a43b6bd89abbc21b4be3b2->enter($__internal_3343acd436fd0a30ad7b8f9e4b8ca8f0f0dc2da112a43b6bd89abbc21b4be3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e645d079557f986f73f86dee0ffff2f09fa18a03a69b3bcc6a9a08bb685d54b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e645d079557f986f73f86dee0ffff2f09fa18a03a69b3bcc6a9a08bb685d54b5->enter($__internal_e645d079557f986f73f86dee0ffff2f09fa18a03a69b3bcc6a9a08bb685d54b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e645d079557f986f73f86dee0ffff2f09fa18a03a69b3bcc6a9a08bb685d54b5->leave($__internal_e645d079557f986f73f86dee0ffff2f09fa18a03a69b3bcc6a9a08bb685d54b5_prof);

        
        $__internal_3343acd436fd0a30ad7b8f9e4b8ca8f0f0dc2da112a43b6bd89abbc21b4be3b2->leave($__internal_3343acd436fd0a30ad7b8f9e4b8ca8f0f0dc2da112a43b6bd89abbc21b4be3b2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0e7208b1ed1abe623b0eb0bd970efcbfcbe93e2281288a0397fe0a6b1a6c6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e7208b1ed1abe623b0eb0bd970efcbfcbe93e2281288a0397fe0a6b1a6c6a8->enter($__internal_a0e7208b1ed1abe623b0eb0bd970efcbfcbe93e2281288a0397fe0a6b1a6c6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90337e7d5818f112881ad29e3f65817da28bff34d4e5628f52d301e07112a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90337e7d5818f112881ad29e3f65817da28bff34d4e5628f52d301e07112a988->enter($__internal_90337e7d5818f112881ad29e3f65817da28bff34d4e5628f52d301e07112a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90337e7d5818f112881ad29e3f65817da28bff34d4e5628f52d301e07112a988->leave($__internal_90337e7d5818f112881ad29e3f65817da28bff34d4e5628f52d301e07112a988_prof);

        
        $__internal_a0e7208b1ed1abe623b0eb0bd970efcbfcbe93e2281288a0397fe0a6b1a6c6a8->leave($__internal_a0e7208b1ed1abe623b0eb0bd970efcbfcbe93e2281288a0397fe0a6b1a6c6a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e095bb55a066cf585b1924c8433088807453fe3b7ab7bf6a0e2c15f6e54aa77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e095bb55a066cf585b1924c8433088807453fe3b7ab7bf6a0e2c15f6e54aa77b->enter($__internal_e095bb55a066cf585b1924c8433088807453fe3b7ab7bf6a0e2c15f6e54aa77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a3f327f60d1165d240e8116e995c2f46a07a2b4dd75a894a79a973b2d2853b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3f327f60d1165d240e8116e995c2f46a07a2b4dd75a894a79a973b2d2853b6->enter($__internal_4a3f327f60d1165d240e8116e995c2f46a07a2b4dd75a894a79a973b2d2853b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a3f327f60d1165d240e8116e995c2f46a07a2b4dd75a894a79a973b2d2853b6->leave($__internal_4a3f327f60d1165d240e8116e995c2f46a07a2b4dd75a894a79a973b2d2853b6_prof);

        
        $__internal_e095bb55a066cf585b1924c8433088807453fe3b7ab7bf6a0e2c15f6e54aa77b->leave($__internal_e095bb55a066cf585b1924c8433088807453fe3b7ab7bf6a0e2c15f6e54aa77b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\app/Resources\\views/base.html.twig");
    }
}
