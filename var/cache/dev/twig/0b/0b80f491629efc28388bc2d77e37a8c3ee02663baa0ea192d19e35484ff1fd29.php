<?php

/* EspritForAllBackEndBundle:Default:index.html.twig */
class __TwigTemplate_10a4a5e65853417a631ea56482c0255b4f3fc604291d4740973504c5fee7c80d extends Twig_Template
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
        $__internal_d8352cb4754f60d8d9ef0054b8273409006ffdc7318b899cf1f29cfe52c551cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8352cb4754f60d8d9ef0054b8273409006ffdc7318b899cf1f29cfe52c551cd->enter($__internal_d8352cb4754f60d8d9ef0054b8273409006ffdc7318b899cf1f29cfe52c551cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Default:index.html.twig"));

        $__internal_c22cdf81a6f8a3ed5553a2b74e19348a9c557dd0e8fe1c43f772a382da631381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22cdf81a6f8a3ed5553a2b74e19348a9c557dd0e8fe1c43f772a382da631381->enter($__internal_c22cdf81a6f8a3ed5553a2b74e19348a9c557dd0e8fe1c43f772a382da631381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d8352cb4754f60d8d9ef0054b8273409006ffdc7318b899cf1f29cfe52c551cd->leave($__internal_d8352cb4754f60d8d9ef0054b8273409006ffdc7318b899cf1f29cfe52c551cd_prof);

        
        $__internal_c22cdf81a6f8a3ed5553a2b74e19348a9c557dd0e8fe1c43f772a382da631381->leave($__internal_c22cdf81a6f8a3ed5553a2b74e19348a9c557dd0e8fe1c43f772a382da631381_prof);

    }

    public function getTemplateName()
    {
        return "EspritForAllBackEndBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "EspritForAllBackEndBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\EspritForAll\\BackEndBundle/Resources/views/Default/index.html.twig");
    }
}
