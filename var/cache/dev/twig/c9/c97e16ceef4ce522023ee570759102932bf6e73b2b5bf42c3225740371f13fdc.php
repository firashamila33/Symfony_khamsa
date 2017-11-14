<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_56fb50f342e36182484d04dd15c5a543b6ae60648e4c0aa0e8976faedf1a90df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_19fad2998a2bcdedd8d198e0b3efb401288c935bf983a46f950359145b647cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fad2998a2bcdedd8d198e0b3efb401288c935bf983a46f950359145b647cd1->enter($__internal_19fad2998a2bcdedd8d198e0b3efb401288c935bf983a46f950359145b647cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_24e034999d92e09998b369c03e5acb119d0b42c8d1f0dcd07d629b8884007e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e034999d92e09998b369c03e5acb119d0b42c8d1f0dcd07d629b8884007e47->enter($__internal_24e034999d92e09998b369c03e5acb119d0b42c8d1f0dcd07d629b8884007e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19fad2998a2bcdedd8d198e0b3efb401288c935bf983a46f950359145b647cd1->leave($__internal_19fad2998a2bcdedd8d198e0b3efb401288c935bf983a46f950359145b647cd1_prof);

        
        $__internal_24e034999d92e09998b369c03e5acb119d0b42c8d1f0dcd07d629b8884007e47->leave($__internal_24e034999d92e09998b369c03e5acb119d0b42c8d1f0dcd07d629b8884007e47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7be80a55dd772c4800e1a1a23b1c2c7e3c1fd646f3a6c42161712bcc8e9dd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7be80a55dd772c4800e1a1a23b1c2c7e3c1fd646f3a6c42161712bcc8e9dd23->enter($__internal_a7be80a55dd772c4800e1a1a23b1c2c7e3c1fd646f3a6c42161712bcc8e9dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74c1d19d9045855d373cb8a2eec69175892a507b3f08d9b12777f9d93eb9337f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c1d19d9045855d373cb8a2eec69175892a507b3f08d9b12777f9d93eb9337f->enter($__internal_74c1d19d9045855d373cb8a2eec69175892a507b3f08d9b12777f9d93eb9337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_74c1d19d9045855d373cb8a2eec69175892a507b3f08d9b12777f9d93eb9337f->leave($__internal_74c1d19d9045855d373cb8a2eec69175892a507b3f08d9b12777f9d93eb9337f_prof);

        
        $__internal_a7be80a55dd772c4800e1a1a23b1c2c7e3c1fd646f3a6c42161712bcc8e9dd23->leave($__internal_a7be80a55dd772c4800e1a1a23b1c2c7e3c1fd646f3a6c42161712bcc8e9dd23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
