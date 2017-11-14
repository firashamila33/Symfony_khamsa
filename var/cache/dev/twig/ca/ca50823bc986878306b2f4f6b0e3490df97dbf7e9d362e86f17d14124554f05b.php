<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3f7050e66feca1fbb4468aec664dd84ea019ce917f9037234903a534b2c34710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_11e19b2588f9e8b5050f26c317f239359e251b868efc4d2dc45fcae34d704b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e19b2588f9e8b5050f26c317f239359e251b868efc4d2dc45fcae34d704b12->enter($__internal_11e19b2588f9e8b5050f26c317f239359e251b868efc4d2dc45fcae34d704b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c0356663dd08d2bdd35b846710ea706217c5ec2aded4999f1d2f6bd55fc33b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0356663dd08d2bdd35b846710ea706217c5ec2aded4999f1d2f6bd55fc33b0e->enter($__internal_c0356663dd08d2bdd35b846710ea706217c5ec2aded4999f1d2f6bd55fc33b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11e19b2588f9e8b5050f26c317f239359e251b868efc4d2dc45fcae34d704b12->leave($__internal_11e19b2588f9e8b5050f26c317f239359e251b868efc4d2dc45fcae34d704b12_prof);

        
        $__internal_c0356663dd08d2bdd35b846710ea706217c5ec2aded4999f1d2f6bd55fc33b0e->leave($__internal_c0356663dd08d2bdd35b846710ea706217c5ec2aded4999f1d2f6bd55fc33b0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fb2856c1f6706e2b23c47b0d617843edd39b062dc7b936779a6014f8c5a9342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb2856c1f6706e2b23c47b0d617843edd39b062dc7b936779a6014f8c5a9342->enter($__internal_7fb2856c1f6706e2b23c47b0d617843edd39b062dc7b936779a6014f8c5a9342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13c97917385b77d21678c675b519d4ed8fbca946ec9a591203b11fe8cf86ef5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c97917385b77d21678c675b519d4ed8fbca946ec9a591203b11fe8cf86ef5d->enter($__internal_13c97917385b77d21678c675b519d4ed8fbca946ec9a591203b11fe8cf86ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_13c97917385b77d21678c675b519d4ed8fbca946ec9a591203b11fe8cf86ef5d->leave($__internal_13c97917385b77d21678c675b519d4ed8fbca946ec9a591203b11fe8cf86ef5d_prof);

        
        $__internal_7fb2856c1f6706e2b23c47b0d617843edd39b062dc7b936779a6014f8c5a9342->leave($__internal_7fb2856c1f6706e2b23c47b0d617843edd39b062dc7b936779a6014f8c5a9342_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
