<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b94cbf7701a9ddbec739aaa0a4aa465c9b0e1a0464606c118985069f7a08e0e9 extends Twig_Template
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
        $__internal_4ff1180094d4e12a2c51c99a4dfd4fa7d3040165cfe137834270f51a3a97f71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff1180094d4e12a2c51c99a4dfd4fa7d3040165cfe137834270f51a3a97f71f->enter($__internal_4ff1180094d4e12a2c51c99a4dfd4fa7d3040165cfe137834270f51a3a97f71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_159bbde298f19aeb94ce512860622b6995030d926335d990ccd16d2ca266deea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159bbde298f19aeb94ce512860622b6995030d926335d990ccd16d2ca266deea->enter($__internal_159bbde298f19aeb94ce512860622b6995030d926335d990ccd16d2ca266deea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff1180094d4e12a2c51c99a4dfd4fa7d3040165cfe137834270f51a3a97f71f->leave($__internal_4ff1180094d4e12a2c51c99a4dfd4fa7d3040165cfe137834270f51a3a97f71f_prof);

        
        $__internal_159bbde298f19aeb94ce512860622b6995030d926335d990ccd16d2ca266deea->leave($__internal_159bbde298f19aeb94ce512860622b6995030d926335d990ccd16d2ca266deea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed007667102b6f0515b02b5e843921467bca3e940181b27aa1815c6652227139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed007667102b6f0515b02b5e843921467bca3e940181b27aa1815c6652227139->enter($__internal_ed007667102b6f0515b02b5e843921467bca3e940181b27aa1815c6652227139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd47efd015f0120d2bfc1030af1d1737144fd904e3a2f79b98b83913f40fa782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd47efd015f0120d2bfc1030af1d1737144fd904e3a2f79b98b83913f40fa782->enter($__internal_dd47efd015f0120d2bfc1030af1d1737144fd904e3a2f79b98b83913f40fa782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd47efd015f0120d2bfc1030af1d1737144fd904e3a2f79b98b83913f40fa782->leave($__internal_dd47efd015f0120d2bfc1030af1d1737144fd904e3a2f79b98b83913f40fa782_prof);

        
        $__internal_ed007667102b6f0515b02b5e843921467bca3e940181b27aa1815c6652227139->leave($__internal_ed007667102b6f0515b02b5e843921467bca3e940181b27aa1815c6652227139_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c99d0507ae1a4cbe4bf5c62d49a9069c8b9082c62b0447e1cf78b1c0aad209f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c99d0507ae1a4cbe4bf5c62d49a9069c8b9082c62b0447e1cf78b1c0aad209f->enter($__internal_3c99d0507ae1a4cbe4bf5c62d49a9069c8b9082c62b0447e1cf78b1c0aad209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_abc714f10b5832d953b533450e9b3bdb3f13d563538551c9ba5206dd936a163f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc714f10b5832d953b533450e9b3bdb3f13d563538551c9ba5206dd936a163f->enter($__internal_abc714f10b5832d953b533450e9b3bdb3f13d563538551c9ba5206dd936a163f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abc714f10b5832d953b533450e9b3bdb3f13d563538551c9ba5206dd936a163f->leave($__internal_abc714f10b5832d953b533450e9b3bdb3f13d563538551c9ba5206dd936a163f_prof);

        
        $__internal_3c99d0507ae1a4cbe4bf5c62d49a9069c8b9082c62b0447e1cf78b1c0aad209f->leave($__internal_3c99d0507ae1a4cbe4bf5c62d49a9069c8b9082c62b0447e1cf78b1c0aad209f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_645aa2b2b7e088452627be895b0fb922c89eaff36de3b57350e2ee4e9ca48351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645aa2b2b7e088452627be895b0fb922c89eaff36de3b57350e2ee4e9ca48351->enter($__internal_645aa2b2b7e088452627be895b0fb922c89eaff36de3b57350e2ee4e9ca48351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f5d94ae8eb7729d191ecd08ae0bbfe383531f290fcd3414bfe4e2f86a9eb97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5d94ae8eb7729d191ecd08ae0bbfe383531f290fcd3414bfe4e2f86a9eb97b->enter($__internal_2f5d94ae8eb7729d191ecd08ae0bbfe383531f290fcd3414bfe4e2f86a9eb97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f5d94ae8eb7729d191ecd08ae0bbfe383531f290fcd3414bfe4e2f86a9eb97b->leave($__internal_2f5d94ae8eb7729d191ecd08ae0bbfe383531f290fcd3414bfe4e2f86a9eb97b_prof);

        
        $__internal_645aa2b2b7e088452627be895b0fb922c89eaff36de3b57350e2ee4e9ca48351->leave($__internal_645aa2b2b7e088452627be895b0fb922c89eaff36de3b57350e2ee4e9ca48351_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
