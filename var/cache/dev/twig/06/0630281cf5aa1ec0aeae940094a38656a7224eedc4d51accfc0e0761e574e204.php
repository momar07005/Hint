<?php

/* default/index.html.twig */
class __TwigTemplate_acbe26b6b6c0217319c6c3e5fcdf5e5d7a6ce51059223e5fa099ef242a10861e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7631b7d5d6b5054c9a696ab6a6b1f30b7cb096a78b44f160d27134193b7b17f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7631b7d5d6b5054c9a696ab6a6b1f30b7cb096a78b44f160d27134193b7b17f9->enter($__internal_7631b7d5d6b5054c9a696ab6a6b1f30b7cb096a78b44f160d27134193b7b17f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a100c9df7aca561c4effc452adb373ca52032749eb13fb4de509881ff7df016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a100c9df7aca561c4effc452adb373ca52032749eb13fb4de509881ff7df016f->enter($__internal_a100c9df7aca561c4effc452adb373ca52032749eb13fb4de509881ff7df016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7631b7d5d6b5054c9a696ab6a6b1f30b7cb096a78b44f160d27134193b7b17f9->leave($__internal_7631b7d5d6b5054c9a696ab6a6b1f30b7cb096a78b44f160d27134193b7b17f9_prof);

        
        $__internal_a100c9df7aca561c4effc452adb373ca52032749eb13fb4de509881ff7df016f->leave($__internal_a100c9df7aca561c4effc452adb373ca52032749eb13fb4de509881ff7df016f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a9fdb00c12f7b211e8785b0ea8a470d618b726862e03e5f178d585e76dbd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a9fdb00c12f7b211e8785b0ea8a470d618b726862e03e5f178d585e76dbd94->enter($__internal_e4a9fdb00c12f7b211e8785b0ea8a470d618b726862e03e5f178d585e76dbd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d706f95b737cabc9dc71588ee9b7a92b2d17a6bd4f98ecc451805146fdceb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d706f95b737cabc9dc71588ee9b7a92b2d17a6bd4f98ecc451805146fdceb9b->enter($__internal_5d706f95b737cabc9dc71588ee9b7a92b2d17a6bd4f98ecc451805146fdceb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <header class=\"row\">
            ";
        // line 7
        $this->loadTemplate("default/header.html.twig", "default/index.html.twig", 7)->display($context);
        // line 8
        echo "        </header>
        <footer class=\"row\">
        \t";
        // line 10
        $this->loadTemplate("default/footer.html.twig", "default/index.html.twig", 10)->display($context);
        // line 11
        echo "        </footer>
    </div>
";
        
        $__internal_5d706f95b737cabc9dc71588ee9b7a92b2d17a6bd4f98ecc451805146fdceb9b->leave($__internal_5d706f95b737cabc9dc71588ee9b7a92b2d17a6bd4f98ecc451805146fdceb9b_prof);

        
        $__internal_e4a9fdb00c12f7b211e8785b0ea8a470d618b726862e03e5f178d585e76dbd94->leave($__internal_e4a9fdb00c12f7b211e8785b0ea8a470d618b726862e03e5f178d585e76dbd94_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9368308f73a1e1a0ee02e2947bf979ea5fbee8adeab43f0315ce5bb04a4c3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9368308f73a1e1a0ee02e2947bf979ea5fbee8adeab43f0315ce5bb04a4c3b4->enter($__internal_e9368308f73a1e1a0ee02e2947bf979ea5fbee8adeab43f0315ce5bb04a4c3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_791ac344e6458e0270b60ddc71b719025dd7f242fa1a2dd382c3bb1240a5adeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791ac344e6458e0270b60ddc71b719025dd7f242fa1a2dd382c3bb1240a5adeb->enter($__internal_791ac344e6458e0270b60ddc71b719025dd7f242fa1a2dd382c3bb1240a5adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
";
        
        $__internal_791ac344e6458e0270b60ddc71b719025dd7f242fa1a2dd382c3bb1240a5adeb->leave($__internal_791ac344e6458e0270b60ddc71b719025dd7f242fa1a2dd382c3bb1240a5adeb_prof);

        
        $__internal_e9368308f73a1e1a0ee02e2947bf979ea5fbee8adeab43f0315ce5bb04a4c3b4->leave($__internal_e9368308f73a1e1a0ee02e2947bf979ea5fbee8adeab43f0315ce5bb04a4c3b4_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  74 => 15,  62 => 11,  60 => 10,  56 => 8,  54 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
    <div class=\"container-fluid\">
        <header class=\"row\">
            {% include 'default/header.html.twig' %}
        </header>
        <footer class=\"row\">
        \t{% include 'default/footer.html.twig' %}
        </footer>
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "default/index.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/default/index.html.twig");
    }
}
