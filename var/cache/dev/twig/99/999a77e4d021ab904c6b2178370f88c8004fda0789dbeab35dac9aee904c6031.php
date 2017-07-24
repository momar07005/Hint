<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4dbd497deb6193d31ca6c58354dfc01ec7cfb49cfc91bf552561bd8b69f7447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7a975a8c8ebf9ad17000afe741e53d482a29d02b0a91cabde7c9509eed586d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a975a8c8ebf9ad17000afe741e53d482a29d02b0a91cabde7c9509eed586d89->enter($__internal_7a975a8c8ebf9ad17000afe741e53d482a29d02b0a91cabde7c9509eed586d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_cdd5a1608145afdf495f130ca0fb6fa6f5e6b48df1f47c4bd438addea4ecc88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd5a1608145afdf495f130ca0fb6fa6f5e6b48df1f47c4bd438addea4ecc88c->enter($__internal_cdd5a1608145afdf495f130ca0fb6fa6f5e6b48df1f47c4bd438addea4ecc88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a975a8c8ebf9ad17000afe741e53d482a29d02b0a91cabde7c9509eed586d89->leave($__internal_7a975a8c8ebf9ad17000afe741e53d482a29d02b0a91cabde7c9509eed586d89_prof);

        
        $__internal_cdd5a1608145afdf495f130ca0fb6fa6f5e6b48df1f47c4bd438addea4ecc88c->leave($__internal_cdd5a1608145afdf495f130ca0fb6fa6f5e6b48df1f47c4bd438addea4ecc88c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dc394b52ca8e2ec373f147f6057fda26aaca1a985e20811761b6d29fb9fa0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc394b52ca8e2ec373f147f6057fda26aaca1a985e20811761b6d29fb9fa0d8->enter($__internal_3dc394b52ca8e2ec373f147f6057fda26aaca1a985e20811761b6d29fb9fa0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b96d8753a5d077c144a6a145aef9833ddbe1f4d9e32b10b0e3f959e737191e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96d8753a5d077c144a6a145aef9833ddbe1f4d9e32b10b0e3f959e737191e33->enter($__internal_b96d8753a5d077c144a6a145aef9833ddbe1f4d9e32b10b0e3f959e737191e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b96d8753a5d077c144a6a145aef9833ddbe1f4d9e32b10b0e3f959e737191e33->leave($__internal_b96d8753a5d077c144a6a145aef9833ddbe1f4d9e32b10b0e3f959e737191e33_prof);

        
        $__internal_3dc394b52ca8e2ec373f147f6057fda26aaca1a985e20811761b6d29fb9fa0d8->leave($__internal_3dc394b52ca8e2ec373f147f6057fda26aaca1a985e20811761b6d29fb9fa0d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
