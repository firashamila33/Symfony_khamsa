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
        $__internal_cc7f00a2195f61eb6009bf3863509ea13125c082f3b97fe9d67573970c8b22e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7f00a2195f61eb6009bf3863509ea13125c082f3b97fe9d67573970c8b22e0->enter($__internal_cc7f00a2195f61eb6009bf3863509ea13125c082f3b97fe9d67573970c8b22e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_925c69685e8ca57b1d467a764a5a0b4414e068ae86615fda39c571f9c2a37cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925c69685e8ca57b1d467a764a5a0b4414e068ae86615fda39c571f9c2a37cee->enter($__internal_925c69685e8ca57b1d467a764a5a0b4414e068ae86615fda39c571f9c2a37cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cc7f00a2195f61eb6009bf3863509ea13125c082f3b97fe9d67573970c8b22e0->leave($__internal_cc7f00a2195f61eb6009bf3863509ea13125c082f3b97fe9d67573970c8b22e0_prof);

        
        $__internal_925c69685e8ca57b1d467a764a5a0b4414e068ae86615fda39c571f9c2a37cee->leave($__internal_925c69685e8ca57b1d467a764a5a0b4414e068ae86615fda39c571f9c2a37cee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_804fa069beeb944c4b72d2a4ba8583ee77a5b82f03a159b912d2fcfb6cf04900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804fa069beeb944c4b72d2a4ba8583ee77a5b82f03a159b912d2fcfb6cf04900->enter($__internal_804fa069beeb944c4b72d2a4ba8583ee77a5b82f03a159b912d2fcfb6cf04900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92a0fc62d662b21cd74211108ad35fcfca20dd23383e6bf1ec97be89c087de41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a0fc62d662b21cd74211108ad35fcfca20dd23383e6bf1ec97be89c087de41->enter($__internal_92a0fc62d662b21cd74211108ad35fcfca20dd23383e6bf1ec97be89c087de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_92a0fc62d662b21cd74211108ad35fcfca20dd23383e6bf1ec97be89c087de41->leave($__internal_92a0fc62d662b21cd74211108ad35fcfca20dd23383e6bf1ec97be89c087de41_prof);

        
        $__internal_804fa069beeb944c4b72d2a4ba8583ee77a5b82f03a159b912d2fcfb6cf04900->leave($__internal_804fa069beeb944c4b72d2a4ba8583ee77a5b82f03a159b912d2fcfb6cf04900_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a06d94d77886f0e13c3653565bcce256de4cbbac0a917e64429f97bd002896e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a06d94d77886f0e13c3653565bcce256de4cbbac0a917e64429f97bd002896e->enter($__internal_5a06d94d77886f0e13c3653565bcce256de4cbbac0a917e64429f97bd002896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ce048f019e8c647d04a8f100def15ced0ac7c1ed9c4f4fe35c1d7b6b72305f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce048f019e8c647d04a8f100def15ced0ac7c1ed9c4f4fe35c1d7b6b72305f1->enter($__internal_4ce048f019e8c647d04a8f100def15ced0ac7c1ed9c4f4fe35c1d7b6b72305f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ce048f019e8c647d04a8f100def15ced0ac7c1ed9c4f4fe35c1d7b6b72305f1->leave($__internal_4ce048f019e8c647d04a8f100def15ced0ac7c1ed9c4f4fe35c1d7b6b72305f1_prof);

        
        $__internal_5a06d94d77886f0e13c3653565bcce256de4cbbac0a917e64429f97bd002896e->leave($__internal_5a06d94d77886f0e13c3653565bcce256de4cbbac0a917e64429f97bd002896e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_effc8a79e24cf49768bd75db21d966773d9bd27b5031182beb7f97f7ecbef496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effc8a79e24cf49768bd75db21d966773d9bd27b5031182beb7f97f7ecbef496->enter($__internal_effc8a79e24cf49768bd75db21d966773d9bd27b5031182beb7f97f7ecbef496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c81aa58aa235ff926cdd3e024a16d0772679785afa241774bb804e5493615927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81aa58aa235ff926cdd3e024a16d0772679785afa241774bb804e5493615927->enter($__internal_c81aa58aa235ff926cdd3e024a16d0772679785afa241774bb804e5493615927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c81aa58aa235ff926cdd3e024a16d0772679785afa241774bb804e5493615927->leave($__internal_c81aa58aa235ff926cdd3e024a16d0772679785afa241774bb804e5493615927_prof);

        
        $__internal_effc8a79e24cf49768bd75db21d966773d9bd27b5031182beb7f97f7ecbef496->leave($__internal_effc8a79e24cf49768bd75db21d966773d9bd27b5031182beb7f97f7ecbef496_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1081496f03db392845d48176e86704ad9efc823d7826f2d97759f5e0d3fd5cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1081496f03db392845d48176e86704ad9efc823d7826f2d97759f5e0d3fd5cb8->enter($__internal_1081496f03db392845d48176e86704ad9efc823d7826f2d97759f5e0d3fd5cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0237c865d4e8c1195ffc05b05820bab0ad63fbeb5bc921351190e32b8803f291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0237c865d4e8c1195ffc05b05820bab0ad63fbeb5bc921351190e32b8803f291->enter($__internal_0237c865d4e8c1195ffc05b05820bab0ad63fbeb5bc921351190e32b8803f291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0237c865d4e8c1195ffc05b05820bab0ad63fbeb5bc921351190e32b8803f291->leave($__internal_0237c865d4e8c1195ffc05b05820bab0ad63fbeb5bc921351190e32b8803f291_prof);

        
        $__internal_1081496f03db392845d48176e86704ad9efc823d7826f2d97759f5e0d3fd5cb8->leave($__internal_1081496f03db392845d48176e86704ad9efc823d7826f2d97759f5e0d3fd5cb8_prof);

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
