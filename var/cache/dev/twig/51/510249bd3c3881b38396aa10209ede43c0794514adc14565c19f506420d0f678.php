<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_06ad363dc8633e9af7edd796e4311ab999fa726a19daf2a96bc419a3ad6a0145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_853605235ade1e4b8b6ad14431de6354030c4ce51d80899d8274b2e44eca3b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853605235ade1e4b8b6ad14431de6354030c4ce51d80899d8274b2e44eca3b87->enter($__internal_853605235ade1e4b8b6ad14431de6354030c4ce51d80899d8274b2e44eca3b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_6e633aa65d8d17ffd9ddb8ed1e4bc4250002e465f72de0b805e67fe99ce0fbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e633aa65d8d17ffd9ddb8ed1e4bc4250002e465f72de0b805e67fe99ce0fbc7->enter($__internal_6e633aa65d8d17ffd9ddb8ed1e4bc4250002e465f72de0b805e67fe99ce0fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853605235ade1e4b8b6ad14431de6354030c4ce51d80899d8274b2e44eca3b87->leave($__internal_853605235ade1e4b8b6ad14431de6354030c4ce51d80899d8274b2e44eca3b87_prof);

        
        $__internal_6e633aa65d8d17ffd9ddb8ed1e4bc4250002e465f72de0b805e67fe99ce0fbc7->leave($__internal_6e633aa65d8d17ffd9ddb8ed1e4bc4250002e465f72de0b805e67fe99ce0fbc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30e8f65b055f2ec7829254147d0eb54f7d31f7fd3728fafc5d21171eaca7f903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e8f65b055f2ec7829254147d0eb54f7d31f7fd3728fafc5d21171eaca7f903->enter($__internal_30e8f65b055f2ec7829254147d0eb54f7d31f7fd3728fafc5d21171eaca7f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8a79aeae43f7d83a4cd51d8ff9c85d4d6fb5ff03aa5323937e2285caead97ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a79aeae43f7d83a4cd51d8ff9c85d4d6fb5ff03aa5323937e2285caead97ad->enter($__internal_f8a79aeae43f7d83a4cd51d8ff9c85d4d6fb5ff03aa5323937e2285caead97ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_f8a79aeae43f7d83a4cd51d8ff9c85d4d6fb5ff03aa5323937e2285caead97ad->leave($__internal_f8a79aeae43f7d83a4cd51d8ff9c85d4d6fb5ff03aa5323937e2285caead97ad_prof);

        
        $__internal_30e8f65b055f2ec7829254147d0eb54f7d31f7fd3728fafc5d21171eaca7f903->leave($__internal_30e8f65b055f2ec7829254147d0eb54f7d31f7fd3728fafc5d21171eaca7f903_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
