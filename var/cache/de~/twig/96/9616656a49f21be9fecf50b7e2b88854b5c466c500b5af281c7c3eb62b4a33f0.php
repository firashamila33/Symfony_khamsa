<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_edbb44d6e36d2ccb6b634c073b146417c87a8fa96fc07b4187c2544f156ec688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a335cbb16cc0b188e414c3d48b7858eb18620a18150e76d07da1fa8edda364d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a335cbb16cc0b188e414c3d48b7858eb18620a18150e76d07da1fa8edda364d5->enter($__internal_a335cbb16cc0b188e414c3d48b7858eb18620a18150e76d07da1fa8edda364d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_300ac53d5f77f57831cfa1db495322c15006129a432744022cc0b259a057ae64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300ac53d5f77f57831cfa1db495322c15006129a432744022cc0b259a057ae64->enter($__internal_300ac53d5f77f57831cfa1db495322c15006129a432744022cc0b259a057ae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a335cbb16cc0b188e414c3d48b7858eb18620a18150e76d07da1fa8edda364d5->leave($__internal_a335cbb16cc0b188e414c3d48b7858eb18620a18150e76d07da1fa8edda364d5_prof);

        
        $__internal_300ac53d5f77f57831cfa1db495322c15006129a432744022cc0b259a057ae64->leave($__internal_300ac53d5f77f57831cfa1db495322c15006129a432744022cc0b259a057ae64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ac9e2310f2e34cd2fadc388ab697d9220394ede17a9bfcbcabbaeffbe025536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac9e2310f2e34cd2fadc388ab697d9220394ede17a9bfcbcabbaeffbe025536->enter($__internal_1ac9e2310f2e34cd2fadc388ab697d9220394ede17a9bfcbcabbaeffbe025536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d65472ad61e1137eb0230ed18ecc9870f9bbafe1bf03798291bdc810fe130090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65472ad61e1137eb0230ed18ecc9870f9bbafe1bf03798291bdc810fe130090->enter($__internal_d65472ad61e1137eb0230ed18ecc9870f9bbafe1bf03798291bdc810fe130090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d65472ad61e1137eb0230ed18ecc9870f9bbafe1bf03798291bdc810fe130090->leave($__internal_d65472ad61e1137eb0230ed18ecc9870f9bbafe1bf03798291bdc810fe130090_prof);

        
        $__internal_1ac9e2310f2e34cd2fadc388ab697d9220394ede17a9bfcbcabbaeffbe025536->leave($__internal_1ac9e2310f2e34cd2fadc388ab697d9220394ede17a9bfcbcabbaeffbe025536_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
