<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_18e70cf6082e5a9c1ae5a563b81977dab0c413071a5291391f557b2068010fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f474a7c105003258ee5cc774eb0d4f390ca39602662f05478301174d62b1ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f474a7c105003258ee5cc774eb0d4f390ca39602662f05478301174d62b1ae0->enter($__internal_2f474a7c105003258ee5cc774eb0d4f390ca39602662f05478301174d62b1ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a2cfa4fa4cc03254e79e1a800d76b771d1dc118bf5a5bfa23dceccfc093b894e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cfa4fa4cc03254e79e1a800d76b771d1dc118bf5a5bfa23dceccfc093b894e->enter($__internal_a2cfa4fa4cc03254e79e1a800d76b771d1dc118bf5a5bfa23dceccfc093b894e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2f474a7c105003258ee5cc774eb0d4f390ca39602662f05478301174d62b1ae0->leave($__internal_2f474a7c105003258ee5cc774eb0d4f390ca39602662f05478301174d62b1ae0_prof);

        
        $__internal_a2cfa4fa4cc03254e79e1a800d76b771d1dc118bf5a5bfa23dceccfc093b894e->leave($__internal_a2cfa4fa4cc03254e79e1a800d76b771d1dc118bf5a5bfa23dceccfc093b894e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e564e13a2fa59dba9933ceda392f9d0e1c20a7442cbf4aae43aebde31a41745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e564e13a2fa59dba9933ceda392f9d0e1c20a7442cbf4aae43aebde31a41745->enter($__internal_4e564e13a2fa59dba9933ceda392f9d0e1c20a7442cbf4aae43aebde31a41745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2d2f05e3af70aa4ae9bcbe1637f9a961cc23c8870c8f2d652d3bed717607de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d2f05e3af70aa4ae9bcbe1637f9a961cc23c8870c8f2d652d3bed717607de5->enter($__internal_e2d2f05e3af70aa4ae9bcbe1637f9a961cc23c8870c8f2d652d3bed717607de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e2d2f05e3af70aa4ae9bcbe1637f9a961cc23c8870c8f2d652d3bed717607de5->leave($__internal_e2d2f05e3af70aa4ae9bcbe1637f9a961cc23c8870c8f2d652d3bed717607de5_prof);

        
        $__internal_4e564e13a2fa59dba9933ceda392f9d0e1c20a7442cbf4aae43aebde31a41745->leave($__internal_4e564e13a2fa59dba9933ceda392f9d0e1c20a7442cbf4aae43aebde31a41745_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_22e69676cbcf3dd0b91a9558e7906cea8d0ebf9ed9cae010403a4f344a5ad288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e69676cbcf3dd0b91a9558e7906cea8d0ebf9ed9cae010403a4f344a5ad288->enter($__internal_22e69676cbcf3dd0b91a9558e7906cea8d0ebf9ed9cae010403a4f344a5ad288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9f3974cd3f479c41cdfd832c09e6dba3e6a490cbf6c9ac85b9e2bf2dddc07e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f3974cd3f479c41cdfd832c09e6dba3e6a490cbf6c9ac85b9e2bf2dddc07e3->enter($__internal_c9f3974cd3f479c41cdfd832c09e6dba3e6a490cbf6c9ac85b9e2bf2dddc07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c9f3974cd3f479c41cdfd832c09e6dba3e6a490cbf6c9ac85b9e2bf2dddc07e3->leave($__internal_c9f3974cd3f479c41cdfd832c09e6dba3e6a490cbf6c9ac85b9e2bf2dddc07e3_prof);

        
        $__internal_22e69676cbcf3dd0b91a9558e7906cea8d0ebf9ed9cae010403a4f344a5ad288->leave($__internal_22e69676cbcf3dd0b91a9558e7906cea8d0ebf9ed9cae010403a4f344a5ad288_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b93ebfbc29cea88579732b231aa097ab223f21d703e59b92970418f24f772d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b93ebfbc29cea88579732b231aa097ab223f21d703e59b92970418f24f772d->enter($__internal_b3b93ebfbc29cea88579732b231aa097ab223f21d703e59b92970418f24f772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_046db533e646b9b8279e2735fce39405103a869e8bb1e2a5459b08911e0bad53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046db533e646b9b8279e2735fce39405103a869e8bb1e2a5459b08911e0bad53->enter($__internal_046db533e646b9b8279e2735fce39405103a869e8bb1e2a5459b08911e0bad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_046db533e646b9b8279e2735fce39405103a869e8bb1e2a5459b08911e0bad53->leave($__internal_046db533e646b9b8279e2735fce39405103a869e8bb1e2a5459b08911e0bad53_prof);

        
        $__internal_b3b93ebfbc29cea88579732b231aa097ab223f21d703e59b92970418f24f772d->leave($__internal_b3b93ebfbc29cea88579732b231aa097ab223f21d703e59b92970418f24f772d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
