<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f4fc6c93ce59fdabb380175c3fab7398e0402c5f056babd67d5be2a19909ffcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e259c9b22d95b049346d096382b3b97d44c2d08134afe8a62b259a20126f5793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e259c9b22d95b049346d096382b3b97d44c2d08134afe8a62b259a20126f5793->enter($__internal_e259c9b22d95b049346d096382b3b97d44c2d08134afe8a62b259a20126f5793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_003cc1e4d0ed44627fb215eb82ca2d310064c8da45a5ec868989a4f623855564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003cc1e4d0ed44627fb215eb82ca2d310064c8da45a5ec868989a4f623855564->enter($__internal_003cc1e4d0ed44627fb215eb82ca2d310064c8da45a5ec868989a4f623855564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e259c9b22d95b049346d096382b3b97d44c2d08134afe8a62b259a20126f5793->leave($__internal_e259c9b22d95b049346d096382b3b97d44c2d08134afe8a62b259a20126f5793_prof);

        
        $__internal_003cc1e4d0ed44627fb215eb82ca2d310064c8da45a5ec868989a4f623855564->leave($__internal_003cc1e4d0ed44627fb215eb82ca2d310064c8da45a5ec868989a4f623855564_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a326f564e76af77e44d2a17071b013598eaebeae6adad43f11814dea65be9d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a326f564e76af77e44d2a17071b013598eaebeae6adad43f11814dea65be9d65->enter($__internal_a326f564e76af77e44d2a17071b013598eaebeae6adad43f11814dea65be9d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_040adfb3f4678e9dae9894fee1a717f63d7c98eccd403b4f52a2231aafe873dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040adfb3f4678e9dae9894fee1a717f63d7c98eccd403b4f52a2231aafe873dd->enter($__internal_040adfb3f4678e9dae9894fee1a717f63d7c98eccd403b4f52a2231aafe873dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_040adfb3f4678e9dae9894fee1a717f63d7c98eccd403b4f52a2231aafe873dd->leave($__internal_040adfb3f4678e9dae9894fee1a717f63d7c98eccd403b4f52a2231aafe873dd_prof);

        
        $__internal_a326f564e76af77e44d2a17071b013598eaebeae6adad43f11814dea65be9d65->leave($__internal_a326f564e76af77e44d2a17071b013598eaebeae6adad43f11814dea65be9d65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
