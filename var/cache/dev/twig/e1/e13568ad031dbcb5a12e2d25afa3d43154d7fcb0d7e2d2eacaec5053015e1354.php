<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c8484e6abb53fff0a20c8d53013e387b081b55e34222cfa273a6d140c3f64f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8484e6abb53fff0a20c8d53013e387b081b55e34222cfa273a6d140c3f64f6->enter($__internal_8c8484e6abb53fff0a20c8d53013e387b081b55e34222cfa273a6d140c3f64f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_065d3e9ec290107f9e08b849d230e8753a1c033414d6dfd6731fad2356033f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065d3e9ec290107f9e08b849d230e8753a1c033414d6dfd6731fad2356033f2b->enter($__internal_065d3e9ec290107f9e08b849d230e8753a1c033414d6dfd6731fad2356033f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8484e6abb53fff0a20c8d53013e387b081b55e34222cfa273a6d140c3f64f6->leave($__internal_8c8484e6abb53fff0a20c8d53013e387b081b55e34222cfa273a6d140c3f64f6_prof);

        
        $__internal_065d3e9ec290107f9e08b849d230e8753a1c033414d6dfd6731fad2356033f2b->leave($__internal_065d3e9ec290107f9e08b849d230e8753a1c033414d6dfd6731fad2356033f2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98056eceac2ac53d089adca9a67d70a277d7520175577df331532991dc9d9ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98056eceac2ac53d089adca9a67d70a277d7520175577df331532991dc9d9ef0->enter($__internal_98056eceac2ac53d089adca9a67d70a277d7520175577df331532991dc9d9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d2746b4f904e58f4c686b640bf172ab21599037c6b72e8a037824ba09b677a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2746b4f904e58f4c686b640bf172ab21599037c6b72e8a037824ba09b677a9c->enter($__internal_d2746b4f904e58f4c686b640bf172ab21599037c6b72e8a037824ba09b677a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d2746b4f904e58f4c686b640bf172ab21599037c6b72e8a037824ba09b677a9c->leave($__internal_d2746b4f904e58f4c686b640bf172ab21599037c6b72e8a037824ba09b677a9c_prof);

        
        $__internal_98056eceac2ac53d089adca9a67d70a277d7520175577df331532991dc9d9ef0->leave($__internal_98056eceac2ac53d089adca9a67d70a277d7520175577df331532991dc9d9ef0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
