<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c39d8a3a4ac5a2bd8bc6b6f5ee0f399454d54b0a854ebc00ee7fc2ff4c05d568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd4b489bfa62c9527ea7ad8a141863f7c0904e2fe46775955bda484264f5b5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4b489bfa62c9527ea7ad8a141863f7c0904e2fe46775955bda484264f5b5eb->enter($__internal_dd4b489bfa62c9527ea7ad8a141863f7c0904e2fe46775955bda484264f5b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f0bf855ca58081dbffa3f14eb9b886a5ebed7e39c202d869b2f25e14c9e9cb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bf855ca58081dbffa3f14eb9b886a5ebed7e39c202d869b2f25e14c9e9cb97->enter($__internal_f0bf855ca58081dbffa3f14eb9b886a5ebed7e39c202d869b2f25e14c9e9cb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd4b489bfa62c9527ea7ad8a141863f7c0904e2fe46775955bda484264f5b5eb->leave($__internal_dd4b489bfa62c9527ea7ad8a141863f7c0904e2fe46775955bda484264f5b5eb_prof);

        
        $__internal_f0bf855ca58081dbffa3f14eb9b886a5ebed7e39c202d869b2f25e14c9e9cb97->leave($__internal_f0bf855ca58081dbffa3f14eb9b886a5ebed7e39c202d869b2f25e14c9e9cb97_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a72b95044ec47c8af5c78ac9859369155e9b5b3e1f21e652d87ef0db1ae8358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72b95044ec47c8af5c78ac9859369155e9b5b3e1f21e652d87ef0db1ae8358b->enter($__internal_a72b95044ec47c8af5c78ac9859369155e9b5b3e1f21e652d87ef0db1ae8358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77e255c6b188e634302c922740b2373373ac8f9cc368b553f2ca638caf73b9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e255c6b188e634302c922740b2373373ac8f9cc368b553f2ca638caf73b9d9->enter($__internal_77e255c6b188e634302c922740b2373373ac8f9cc368b553f2ca638caf73b9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_77e255c6b188e634302c922740b2373373ac8f9cc368b553f2ca638caf73b9d9->leave($__internal_77e255c6b188e634302c922740b2373373ac8f9cc368b553f2ca638caf73b9d9_prof);

        
        $__internal_a72b95044ec47c8af5c78ac9859369155e9b5b3e1f21e652d87ef0db1ae8358b->leave($__internal_a72b95044ec47c8af5c78ac9859369155e9b5b3e1f21e652d87ef0db1ae8358b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
