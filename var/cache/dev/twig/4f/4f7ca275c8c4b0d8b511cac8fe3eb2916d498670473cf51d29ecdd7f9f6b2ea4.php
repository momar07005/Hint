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
        $__internal_41b770bdabbaffd9d49e6cdf7205e68b2a3217e39fac6bdea046c61ce46b6b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b770bdabbaffd9d49e6cdf7205e68b2a3217e39fac6bdea046c61ce46b6b45->enter($__internal_41b770bdabbaffd9d49e6cdf7205e68b2a3217e39fac6bdea046c61ce46b6b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9e0ae6962dc954d7734a31b4d16338b4aa916229587a784e6bb947bfd8f5e6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0ae6962dc954d7734a31b4d16338b4aa916229587a784e6bb947bfd8f5e6ae->enter($__internal_9e0ae6962dc954d7734a31b4d16338b4aa916229587a784e6bb947bfd8f5e6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ça fonctionne bien
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_41b770bdabbaffd9d49e6cdf7205e68b2a3217e39fac6bdea046c61ce46b6b45->leave($__internal_41b770bdabbaffd9d49e6cdf7205e68b2a3217e39fac6bdea046c61ce46b6b45_prof);

        
        $__internal_9e0ae6962dc954d7734a31b4d16338b4aa916229587a784e6bb947bfd8f5e6ae->leave($__internal_9e0ae6962dc954d7734a31b4d16338b4aa916229587a784e6bb947bfd8f5e6ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc5dedf755914f29e9a5840970f519e075f98bc731ab2894affc42d5e1e9dca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5dedf755914f29e9a5840970f519e075f98bc731ab2894affc42d5e1e9dca5->enter($__internal_fc5dedf755914f29e9a5840970f519e075f98bc731ab2894affc42d5e1e9dca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_976961fa49267b6991ff2685bca9638db3feaf6c423f83160c2852e9c9922e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976961fa49267b6991ff2685bca9638db3feaf6c423f83160c2852e9c9922e71->enter($__internal_976961fa49267b6991ff2685bca9638db3feaf6c423f83160c2852e9c9922e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_976961fa49267b6991ff2685bca9638db3feaf6c423f83160c2852e9c9922e71->leave($__internal_976961fa49267b6991ff2685bca9638db3feaf6c423f83160c2852e9c9922e71_prof);

        
        $__internal_fc5dedf755914f29e9a5840970f519e075f98bc731ab2894affc42d5e1e9dca5->leave($__internal_fc5dedf755914f29e9a5840970f519e075f98bc731ab2894affc42d5e1e9dca5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d07aadfb0a6557c5ff311e6ab316248a27b99e04e1ef87be3f4653ba3ce6f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d07aadfb0a6557c5ff311e6ab316248a27b99e04e1ef87be3f4653ba3ce6f90->enter($__internal_1d07aadfb0a6557c5ff311e6ab316248a27b99e04e1ef87be3f4653ba3ce6f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3be6a70b20cf241e8ad794ad7559d99e9464c91e8033c5e16ef7d48ae580356d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be6a70b20cf241e8ad794ad7559d99e9464c91e8033c5e16ef7d48ae580356d->enter($__internal_3be6a70b20cf241e8ad794ad7559d99e9464c91e8033c5e16ef7d48ae580356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3be6a70b20cf241e8ad794ad7559d99e9464c91e8033c5e16ef7d48ae580356d->leave($__internal_3be6a70b20cf241e8ad794ad7559d99e9464c91e8033c5e16ef7d48ae580356d_prof);

        
        $__internal_1d07aadfb0a6557c5ff311e6ab316248a27b99e04e1ef87be3f4653ba3ce6f90->leave($__internal_1d07aadfb0a6557c5ff311e6ab316248a27b99e04e1ef87be3f4653ba3ce6f90_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_209a952664132881ec00e52a6168b63324eef130f48f32022c0eef9c3511af17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209a952664132881ec00e52a6168b63324eef130f48f32022c0eef9c3511af17->enter($__internal_209a952664132881ec00e52a6168b63324eef130f48f32022c0eef9c3511af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae66c8e0cb58d5c411f32b9d1ed443927482091f7c7334f319b5f3da4022d0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae66c8e0cb58d5c411f32b9d1ed443927482091f7c7334f319b5f3da4022d0ce->enter($__internal_ae66c8e0cb58d5c411f32b9d1ed443927482091f7c7334f319b5f3da4022d0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae66c8e0cb58d5c411f32b9d1ed443927482091f7c7334f319b5f3da4022d0ce->leave($__internal_ae66c8e0cb58d5c411f32b9d1ed443927482091f7c7334f319b5f3da4022d0ce_prof);

        
        $__internal_209a952664132881ec00e52a6168b63324eef130f48f32022c0eef9c3511af17->leave($__internal_209a952664132881ec00e52a6168b63324eef130f48f32022c0eef9c3511af17_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a7b3d5369a11471de4acbbb346b31260804f57e264ed8d062031930957463a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7b3d5369a11471de4acbbb346b31260804f57e264ed8d062031930957463a9->enter($__internal_9a7b3d5369a11471de4acbbb346b31260804f57e264ed8d062031930957463a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1501f2fe3d821383235a04208b3fa44e546e7aefc5f49dcaf4c10381151c0799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1501f2fe3d821383235a04208b3fa44e546e7aefc5f49dcaf4c10381151c0799->enter($__internal_1501f2fe3d821383235a04208b3fa44e546e7aefc5f49dcaf4c10381151c0799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1501f2fe3d821383235a04208b3fa44e546e7aefc5f49dcaf4c10381151c0799->leave($__internal_1501f2fe3d821383235a04208b3fa44e546e7aefc5f49dcaf4c10381151c0799_prof);

        
        $__internal_9a7b3d5369a11471de4acbbb346b31260804f57e264ed8d062031930957463a9->leave($__internal_9a7b3d5369a11471de4acbbb346b31260804f57e264ed8d062031930957463a9_prof);

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
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        ça fonctionne bien
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/base.html.twig");
    }
}
