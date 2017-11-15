<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cd9acc3b2c1a9e0615fdef25022d64007ae37d505b4a9652701380431352a10b extends Twig_Template
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
        $__internal_e2ba35a3b56628c1ff6f9b43e1240befdf2ec30d8b80571021a4180f4bd4bc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ba35a3b56628c1ff6f9b43e1240befdf2ec30d8b80571021a4180f4bd4bc30->enter($__internal_e2ba35a3b56628c1ff6f9b43e1240befdf2ec30d8b80571021a4180f4bd4bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_75bef67bc117674b966ed56811c20f89b747facab5bf965ad86c2d1b9b176fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bef67bc117674b966ed56811c20f89b747facab5bf965ad86c2d1b9b176fb0->enter($__internal_75bef67bc117674b966ed56811c20f89b747facab5bf965ad86c2d1b9b176fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e2ba35a3b56628c1ff6f9b43e1240befdf2ec30d8b80571021a4180f4bd4bc30->leave($__internal_e2ba35a3b56628c1ff6f9b43e1240befdf2ec30d8b80571021a4180f4bd4bc30_prof);

        
        $__internal_75bef67bc117674b966ed56811c20f89b747facab5bf965ad86c2d1b9b176fb0->leave($__internal_75bef67bc117674b966ed56811c20f89b747facab5bf965ad86c2d1b9b176fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
