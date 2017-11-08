<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_301f7e36e93c06db6363bde1e48ba5ede378407ebf36fcf645720be5691cee69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22f774a2cbd8cdfc8f76e7cc8191807de7dfa1fc1c9b662239a9633af449ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22f774a2cbd8cdfc8f76e7cc8191807de7dfa1fc1c9b662239a9633af449ff8->enter($__internal_b22f774a2cbd8cdfc8f76e7cc8191807de7dfa1fc1c9b662239a9633af449ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_823eaf3951b2a412f6ee6d01a5053c474449be1dc0f4b89fea568b19af0fbf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823eaf3951b2a412f6ee6d01a5053c474449be1dc0f4b89fea568b19af0fbf24->enter($__internal_823eaf3951b2a412f6ee6d01a5053c474449be1dc0f4b89fea568b19af0fbf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b22f774a2cbd8cdfc8f76e7cc8191807de7dfa1fc1c9b662239a9633af449ff8->leave($__internal_b22f774a2cbd8cdfc8f76e7cc8191807de7dfa1fc1c9b662239a9633af449ff8_prof);

        
        $__internal_823eaf3951b2a412f6ee6d01a5053c474449be1dc0f4b89fea568b19af0fbf24->leave($__internal_823eaf3951b2a412f6ee6d01a5053c474449be1dc0f4b89fea568b19af0fbf24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
