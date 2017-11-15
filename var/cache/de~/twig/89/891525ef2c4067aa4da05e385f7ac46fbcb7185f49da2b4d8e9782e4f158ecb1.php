<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_58ca68e30ebf70dd050b47fbca4a472c02651ec2b0a78e718b79245689ed1001 extends Twig_Template
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
        $__internal_612fda4d3c2d3d35ffa37075b8503c6ee138ae9aeb71df376474805a972bd696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612fda4d3c2d3d35ffa37075b8503c6ee138ae9aeb71df376474805a972bd696->enter($__internal_612fda4d3c2d3d35ffa37075b8503c6ee138ae9aeb71df376474805a972bd696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_465febfc8c0cb62dca5fc4e48d00a511754a18172e2f7d9f5a2f6b31ed4cd1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465febfc8c0cb62dca5fc4e48d00a511754a18172e2f7d9f5a2f6b31ed4cd1ec->enter($__internal_465febfc8c0cb62dca5fc4e48d00a511754a18172e2f7d9f5a2f6b31ed4cd1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_612fda4d3c2d3d35ffa37075b8503c6ee138ae9aeb71df376474805a972bd696->leave($__internal_612fda4d3c2d3d35ffa37075b8503c6ee138ae9aeb71df376474805a972bd696_prof);

        
        $__internal_465febfc8c0cb62dca5fc4e48d00a511754a18172e2f7d9f5a2f6b31ed4cd1ec->leave($__internal_465febfc8c0cb62dca5fc4e48d00a511754a18172e2f7d9f5a2f6b31ed4cd1ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
