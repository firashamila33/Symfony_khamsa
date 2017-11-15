<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_38e52be166d54411d2819437b784769294c3b78ab7997079b83d8cf68dcb5dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d2efcc39f82cefd6c3978ccde43de6e73405d113a40c7bce9faafc265952427c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2efcc39f82cefd6c3978ccde43de6e73405d113a40c7bce9faafc265952427c->enter($__internal_d2efcc39f82cefd6c3978ccde43de6e73405d113a40c7bce9faafc265952427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_02d70cec00bbfd928c076c7ae000da1cfe56fffbaf58ff10c794e8d20aceae9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d70cec00bbfd928c076c7ae000da1cfe56fffbaf58ff10c794e8d20aceae9d->enter($__internal_02d70cec00bbfd928c076c7ae000da1cfe56fffbaf58ff10c794e8d20aceae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2efcc39f82cefd6c3978ccde43de6e73405d113a40c7bce9faafc265952427c->leave($__internal_d2efcc39f82cefd6c3978ccde43de6e73405d113a40c7bce9faafc265952427c_prof);

        
        $__internal_02d70cec00bbfd928c076c7ae000da1cfe56fffbaf58ff10c794e8d20aceae9d->leave($__internal_02d70cec00bbfd928c076c7ae000da1cfe56fffbaf58ff10c794e8d20aceae9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b3634da223f89ee49e296ec634af87fac8efadd7a83a2384c7d85948a912db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3634da223f89ee49e296ec634af87fac8efadd7a83a2384c7d85948a912db3->enter($__internal_5b3634da223f89ee49e296ec634af87fac8efadd7a83a2384c7d85948a912db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e672c09e7f25e57e4da27a5731426ec5547e10b1c97cc328e7bc04da4eedb4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e672c09e7f25e57e4da27a5731426ec5547e10b1c97cc328e7bc04da4eedb4ee->enter($__internal_e672c09e7f25e57e4da27a5731426ec5547e10b1c97cc328e7bc04da4eedb4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e672c09e7f25e57e4da27a5731426ec5547e10b1c97cc328e7bc04da4eedb4ee->leave($__internal_e672c09e7f25e57e4da27a5731426ec5547e10b1c97cc328e7bc04da4eedb4ee_prof);

        
        $__internal_5b3634da223f89ee49e296ec634af87fac8efadd7a83a2384c7d85948a912db3->leave($__internal_5b3634da223f89ee49e296ec634af87fac8efadd7a83a2384c7d85948a912db3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
