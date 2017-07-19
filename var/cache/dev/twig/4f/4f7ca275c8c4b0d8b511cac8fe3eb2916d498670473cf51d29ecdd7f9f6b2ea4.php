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
        $__internal_3c4a8507e5c28797379618075a5dc68f9c87512004a3403207411700fec6e706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4a8507e5c28797379618075a5dc68f9c87512004a3403207411700fec6e706->enter($__internal_3c4a8507e5c28797379618075a5dc68f9c87512004a3403207411700fec6e706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4ad4ea225a1896fc6f538f157a25540c320fffaa7e41a5e25c0d03d90c7d365d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad4ea225a1896fc6f538f157a25540c320fffaa7e41a5e25c0d03d90c7d365d->enter($__internal_4ad4ea225a1896fc6f538f157a25540c320fffaa7e41a5e25c0d03d90c7d365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3c4a8507e5c28797379618075a5dc68f9c87512004a3403207411700fec6e706->leave($__internal_3c4a8507e5c28797379618075a5dc68f9c87512004a3403207411700fec6e706_prof);

        
        $__internal_4ad4ea225a1896fc6f538f157a25540c320fffaa7e41a5e25c0d03d90c7d365d->leave($__internal_4ad4ea225a1896fc6f538f157a25540c320fffaa7e41a5e25c0d03d90c7d365d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_622bbec0d0975d7ac9e0bbecf46d5eaf01b475d69069a563394a1da07e4a5c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622bbec0d0975d7ac9e0bbecf46d5eaf01b475d69069a563394a1da07e4a5c7c->enter($__internal_622bbec0d0975d7ac9e0bbecf46d5eaf01b475d69069a563394a1da07e4a5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0e2edfff6df60ca50a247d18738e87981eec88d23a5f17abc0f303df75afdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e2edfff6df60ca50a247d18738e87981eec88d23a5f17abc0f303df75afdd2->enter($__internal_a0e2edfff6df60ca50a247d18738e87981eec88d23a5f17abc0f303df75afdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hint";
        
        $__internal_a0e2edfff6df60ca50a247d18738e87981eec88d23a5f17abc0f303df75afdd2->leave($__internal_a0e2edfff6df60ca50a247d18738e87981eec88d23a5f17abc0f303df75afdd2_prof);

        
        $__internal_622bbec0d0975d7ac9e0bbecf46d5eaf01b475d69069a563394a1da07e4a5c7c->leave($__internal_622bbec0d0975d7ac9e0bbecf46d5eaf01b475d69069a563394a1da07e4a5c7c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8da1228a25ff5ef63700dc6c5bbb042f6e6281cea569140dbe603ba32d97f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8da1228a25ff5ef63700dc6c5bbb042f6e6281cea569140dbe603ba32d97f00->enter($__internal_f8da1228a25ff5ef63700dc6c5bbb042f6e6281cea569140dbe603ba32d97f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d72e4029944f8856880c7d9725c90d03ae44a268affc73f7f8d621fb5951a56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72e4029944f8856880c7d9725c90d03ae44a268affc73f7f8d621fb5951a56b->enter($__internal_d72e4029944f8856880c7d9725c90d03ae44a268affc73f7f8d621fb5951a56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d72e4029944f8856880c7d9725c90d03ae44a268affc73f7f8d621fb5951a56b->leave($__internal_d72e4029944f8856880c7d9725c90d03ae44a268affc73f7f8d621fb5951a56b_prof);

        
        $__internal_f8da1228a25ff5ef63700dc6c5bbb042f6e6281cea569140dbe603ba32d97f00->leave($__internal_f8da1228a25ff5ef63700dc6c5bbb042f6e6281cea569140dbe603ba32d97f00_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f68655a2fc951e8d485a209c6a2c91ba265e50a6b0afbfce1df64d1c4d375b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68655a2fc951e8d485a209c6a2c91ba265e50a6b0afbfce1df64d1c4d375b83->enter($__internal_f68655a2fc951e8d485a209c6a2c91ba265e50a6b0afbfce1df64d1c4d375b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8024e5f12317e33cd7f1e2cf985865662bb741d7dee48d8d473290fa4d7dcab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8024e5f12317e33cd7f1e2cf985865662bb741d7dee48d8d473290fa4d7dcab7->enter($__internal_8024e5f12317e33cd7f1e2cf985865662bb741d7dee48d8d473290fa4d7dcab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8024e5f12317e33cd7f1e2cf985865662bb741d7dee48d8d473290fa4d7dcab7->leave($__internal_8024e5f12317e33cd7f1e2cf985865662bb741d7dee48d8d473290fa4d7dcab7_prof);

        
        $__internal_f68655a2fc951e8d485a209c6a2c91ba265e50a6b0afbfce1df64d1c4d375b83->leave($__internal_f68655a2fc951e8d485a209c6a2c91ba265e50a6b0afbfce1df64d1c4d375b83_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2cf3b5bf6db327de7eed586d08ec268f51923c485531ecc76e7511f92aec526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cf3b5bf6db327de7eed586d08ec268f51923c485531ecc76e7511f92aec526->enter($__internal_e2cf3b5bf6db327de7eed586d08ec268f51923c485531ecc76e7511f92aec526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_006d00f24376328737b4ecd90eee11c7557ff25d59b4f7fa2cff1352be2ef366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006d00f24376328737b4ecd90eee11c7557ff25d59b4f7fa2cff1352be2ef366->enter($__internal_006d00f24376328737b4ecd90eee11c7557ff25d59b4f7fa2cff1352be2ef366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_006d00f24376328737b4ecd90eee11c7557ff25d59b4f7fa2cff1352be2ef366->leave($__internal_006d00f24376328737b4ecd90eee11c7557ff25d59b4f7fa2cff1352be2ef366_prof);

        
        $__internal_e2cf3b5bf6db327de7eed586d08ec268f51923c485531ecc76e7511f92aec526->leave($__internal_e2cf3b5bf6db327de7eed586d08ec268f51923c485531ecc76e7511f92aec526_prof);

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
