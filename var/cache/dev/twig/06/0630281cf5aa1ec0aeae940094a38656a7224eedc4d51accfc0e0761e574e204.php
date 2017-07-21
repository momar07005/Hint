<?php

/* ::default/index.html.twig */
class __TwigTemplate_acbe26b6b6c0217319c6c3e5fcdf5e5d7a6ce51059223e5fa099ef242a10861e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248292ba4fa423faf92c83e182300537c8f982b8ed30a7113a2af1c3a60259cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248292ba4fa423faf92c83e182300537c8f982b8ed30a7113a2af1c3a60259cf->enter($__internal_248292ba4fa423faf92c83e182300537c8f982b8ed30a7113a2af1c3a60259cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default/index.html.twig"));

        $__internal_638e856034af039bf33b49d0d6510cbb155f08b5c4a48d37e2850cf1058d43a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638e856034af039bf33b49d0d6510cbb155f08b5c4a48d37e2850cf1058d43a6->enter($__internal_638e856034af039bf33b49d0d6510cbb155f08b5c4a48d37e2850cf1058d43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248292ba4fa423faf92c83e182300537c8f982b8ed30a7113a2af1c3a60259cf->leave($__internal_248292ba4fa423faf92c83e182300537c8f982b8ed30a7113a2af1c3a60259cf_prof);

        
        $__internal_638e856034af039bf33b49d0d6510cbb155f08b5c4a48d37e2850cf1058d43a6->leave($__internal_638e856034af039bf33b49d0d6510cbb155f08b5c4a48d37e2850cf1058d43a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_abb2ec31eb454a7d96d6fa7ef52046591a85523c4ea8e15e3cb3d17e32df5a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb2ec31eb454a7d96d6fa7ef52046591a85523c4ea8e15e3cb3d17e32df5a68->enter($__internal_abb2ec31eb454a7d96d6fa7ef52046591a85523c4ea8e15e3cb3d17e32df5a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f28e5813a9f8fd7d1cca11bc58f6fe3b6ef2abd8882138458e173d85233ff800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28e5813a9f8fd7d1cca11bc58f6fe3b6ef2abd8882138458e173d85233ff800->enter($__internal_f28e5813a9f8fd7d1cca11bc58f6fe3b6ef2abd8882138458e173d85233ff800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <header class=\"row\">
            ";
        // line 7
        $this->loadTemplate("default/header.html.twig", "::default/index.html.twig", 7)->display($context);
        // line 8
        echo "        </header>
        ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "        <footer class=\"row\">
        \t";
        // line 32
        $this->loadTemplate("default/footer.html.twig", "::default/index.html.twig", 32)->display($context);
        // line 33
        echo "        </footer>
    </div>
";
        
        $__internal_f28e5813a9f8fd7d1cca11bc58f6fe3b6ef2abd8882138458e173d85233ff800->leave($__internal_f28e5813a9f8fd7d1cca11bc58f6fe3b6ef2abd8882138458e173d85233ff800_prof);

        
        $__internal_abb2ec31eb454a7d96d6fa7ef52046591a85523c4ea8e15e3cb3d17e32df5a68->leave($__internal_abb2ec31eb454a7d96d6fa7ef52046591a85523c4ea8e15e3cb3d17e32df5a68_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_31e38cd2aaf9a4620f4f46e35a3f4d89f7cd79c3acae820efa860779e5e5387d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e38cd2aaf9a4620f4f46e35a3f4d89f7cd79c3acae820efa860779e5e5387d->enter($__internal_31e38cd2aaf9a4620f4f46e35a3f4d89f7cd79c3acae820efa860779e5e5387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_05915765e36a122534e07eff4a8664e913320fc8054a929edaece27df803e752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05915765e36a122534e07eff4a8664e913320fc8054a929edaece27df803e752->enter($__internal_05915765e36a122534e07eff4a8664e913320fc8054a929edaece27df803e752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "            <div>
                <p>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>

                </p>
        </div>
        
        ";
        
        $__internal_05915765e36a122534e07eff4a8664e913320fc8054a929edaece27df803e752->leave($__internal_05915765e36a122534e07eff4a8664e913320fc8054a929edaece27df803e752_prof);

        
        $__internal_31e38cd2aaf9a4620f4f46e35a3f4d89f7cd79c3acae820efa860779e5e5387d->leave($__internal_31e38cd2aaf9a4620f4f46e35a3f4d89f7cd79c3acae820efa860779e5e5387d_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0217a480e635311c30c32cf17b43ea08a0c766c57ca9c7dcd2cef9cf0085dc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0217a480e635311c30c32cf17b43ea08a0c766c57ca9c7dcd2cef9cf0085dc1b->enter($__internal_0217a480e635311c30c32cf17b43ea08a0c766c57ca9c7dcd2cef9cf0085dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6735e31defc88cb77761f33aa1c3cf9c89a2e1b5911a3240718d05097ab22844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6735e31defc88cb77761f33aa1c3cf9c89a2e1b5911a3240718d05097ab22844->enter($__internal_6735e31defc88cb77761f33aa1c3cf9c89a2e1b5911a3240718d05097ab22844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "
";
        
        $__internal_6735e31defc88cb77761f33aa1c3cf9c89a2e1b5911a3240718d05097ab22844->leave($__internal_6735e31defc88cb77761f33aa1c3cf9c89a2e1b5911a3240718d05097ab22844_prof);

        
        $__internal_0217a480e635311c30c32cf17b43ea08a0c766c57ca9c7dcd2cef9cf0085dc1b->leave($__internal_0217a480e635311c30c32cf17b43ea08a0c766c57ca9c7dcd2cef9cf0085dc1b_prof);

    }

    public function getTemplateName()
    {
        return "::default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  118 => 37,  88 => 10,  79 => 9,  67 => 33,  65 => 32,  62 => 31,  60 => 9,  57 => 8,  55 => 7,  51 => 5,  42 => 4,  11 => 1,);
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
        {% block content %}
            <div>
                <p>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>
                    Le corpsoiqjsdijfqsd<br>

                </p>
        </div>
        
        {% endblock content %}
        <footer class=\"row\">
        \t{% include 'default/footer.html.twig' %}
        </footer>
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "::default/index.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/default/index.html.twig");
    }
}
