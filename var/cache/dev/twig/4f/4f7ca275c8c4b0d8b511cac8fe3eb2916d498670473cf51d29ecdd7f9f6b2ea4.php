<?php

/* base.html.twig */
class __TwigTemplate_06e88f8920e195ff52c3ee4b326f0552ff44fa1027145e1ca853a7059736c332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701152d57df5413faa174b335a2da1cdd87aed16cef4933a16e08dd5c39dcfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701152d57df5413faa174b335a2da1cdd87aed16cef4933a16e08dd5c39dcfa8->enter($__internal_701152d57df5413faa174b335a2da1cdd87aed16cef4933a16e08dd5c39dcfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3d28fbf3d158b03b40d5e8157c0027bd6f37c674e34233a479ad421c3c5d8982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d28fbf3d158b03b40d5e8157c0027bd6f37c674e34233a479ad421c3c5d8982->enter($__internal_3d28fbf3d158b03b40d5e8157c0027bd6f37c674e34233a479ad421c3c5d8982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/headerFooter.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/body.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        
    </body>
</html>
";
        
        $__internal_701152d57df5413faa174b335a2da1cdd87aed16cef4933a16e08dd5c39dcfa8->leave($__internal_701152d57df5413faa174b335a2da1cdd87aed16cef4933a16e08dd5c39dcfa8_prof);

        
        $__internal_3d28fbf3d158b03b40d5e8157c0027bd6f37c674e34233a479ad421c3c5d8982->leave($__internal_3d28fbf3d158b03b40d5e8157c0027bd6f37c674e34233a479ad421c3c5d8982_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79c9d6f9625233e71b1277ac1510f0e001667fbd1c6fa145b42a313bbaa32b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c9d6f9625233e71b1277ac1510f0e001667fbd1c6fa145b42a313bbaa32b03->enter($__internal_79c9d6f9625233e71b1277ac1510f0e001667fbd1c6fa145b42a313bbaa32b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0689de2adeda4833f6f97653b588b536838ce65f8603725687c4803461a03ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0689de2adeda4833f6f97653b588b536838ce65f8603725687c4803461a03ac->enter($__internal_b0689de2adeda4833f6f97653b588b536838ce65f8603725687c4803461a03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hint";
        
        $__internal_b0689de2adeda4833f6f97653b588b536838ce65f8603725687c4803461a03ac->leave($__internal_b0689de2adeda4833f6f97653b588b536838ce65f8603725687c4803461a03ac_prof);

        
        $__internal_79c9d6f9625233e71b1277ac1510f0e001667fbd1c6fa145b42a313bbaa32b03->leave($__internal_79c9d6f9625233e71b1277ac1510f0e001667fbd1c6fa145b42a313bbaa32b03_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ed9533db7b539af8767a4620264fbc526900b56fdb7e236ea0469e225b80c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed9533db7b539af8767a4620264fbc526900b56fdb7e236ea0469e225b80c20->enter($__internal_6ed9533db7b539af8767a4620264fbc526900b56fdb7e236ea0469e225b80c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ec98ff0d154147f730f89f5b91cc002902d739b8c8dfcd6b7f222e88a06661c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec98ff0d154147f730f89f5b91cc002902d739b8c8dfcd6b7f222e88a06661c->enter($__internal_4ec98ff0d154147f730f89f5b91cc002902d739b8c8dfcd6b7f222e88a06661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ec98ff0d154147f730f89f5b91cc002902d739b8c8dfcd6b7f222e88a06661c->leave($__internal_4ec98ff0d154147f730f89f5b91cc002902d739b8c8dfcd6b7f222e88a06661c_prof);

        
        $__internal_6ed9533db7b539af8767a4620264fbc526900b56fdb7e236ea0469e225b80c20->leave($__internal_6ed9533db7b539af8767a4620264fbc526900b56fdb7e236ea0469e225b80c20_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e0d95d1f2f1f931625ab8aa3ddb052f61da2d659d12f606a78060dc6ee6cdb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0d95d1f2f1f931625ab8aa3ddb052f61da2d659d12f606a78060dc6ee6cdb5->enter($__internal_1e0d95d1f2f1f931625ab8aa3ddb052f61da2d659d12f606a78060dc6ee6cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be8e2b8b1c90dccd701d6bb7bf1acd14a244030c9b84994f364248bf4ca46466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e2b8b1c90dccd701d6bb7bf1acd14a244030c9b84994f364248bf4ca46466->enter($__internal_be8e2b8b1c90dccd701d6bb7bf1acd14a244030c9b84994f364248bf4ca46466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be8e2b8b1c90dccd701d6bb7bf1acd14a244030c9b84994f364248bf4ca46466->leave($__internal_be8e2b8b1c90dccd701d6bb7bf1acd14a244030c9b84994f364248bf4ca46466_prof);

        
        $__internal_1e0d95d1f2f1f931625ab8aa3ddb052f61da2d659d12f606a78060dc6ee6cdb5->leave($__internal_1e0d95d1f2f1f931625ab8aa3ddb052f61da2d659d12f606a78060dc6ee6cdb5_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44e6fb4d836e1e86abb44e56963b8a277cead7579bbe656911d06bd5f807ca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e6fb4d836e1e86abb44e56963b8a277cead7579bbe656911d06bd5f807ca31->enter($__internal_44e6fb4d836e1e86abb44e56963b8a277cead7579bbe656911d06bd5f807ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1defbae57dbd6a00c190b29e03d442a310ee9b7437b1e891dfbecd809cca3607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1defbae57dbd6a00c190b29e03d442a310ee9b7437b1e891dfbecd809cca3607->enter($__internal_1defbae57dbd6a00c190b29e03d442a310ee9b7437b1e891dfbecd809cca3607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1defbae57dbd6a00c190b29e03d442a310ee9b7437b1e891dfbecd809cca3607->leave($__internal_1defbae57dbd6a00c190b29e03d442a310ee9b7437b1e891dfbecd809cca3607_prof);

        
        $__internal_44e6fb4d836e1e86abb44e56963b8a277cead7579bbe656911d06bd5f807ca31->leave($__internal_44e6fb4d836e1e86abb44e56963b8a277cead7579bbe656911d06bd5f807ca31_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  121 => 18,  104 => 8,  86 => 7,  73 => 20,  70 => 19,  68 => 18,  62 => 15,  58 => 14,  52 => 11,  48 => 10,  43 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>{% block title %}Hint{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/headerFooter.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/body.css') }}\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        
    </body>
</html>
", "base.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/base.html.twig");
    }
}
