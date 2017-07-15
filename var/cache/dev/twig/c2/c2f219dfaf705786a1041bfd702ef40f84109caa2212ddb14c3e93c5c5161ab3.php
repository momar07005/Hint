<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea44d268e8cb080002c52328eb02f8ef45ae4e694b9d97ed0a38d26d65c87a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea44d268e8cb080002c52328eb02f8ef45ae4e694b9d97ed0a38d26d65c87a71->enter($__internal_ea44d268e8cb080002c52328eb02f8ef45ae4e694b9d97ed0a38d26d65c87a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_4678ff04fd2d3e1ee8e406332d91c498fda57aa1a1229262ea8d6739a065da68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4678ff04fd2d3e1ee8e406332d91c498fda57aa1a1229262ea8d6739a065da68->enter($__internal_4678ff04fd2d3e1ee8e406332d91c498fda57aa1a1229262ea8d6739a065da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea44d268e8cb080002c52328eb02f8ef45ae4e694b9d97ed0a38d26d65c87a71->leave($__internal_ea44d268e8cb080002c52328eb02f8ef45ae4e694b9d97ed0a38d26d65c87a71_prof);

        
        $__internal_4678ff04fd2d3e1ee8e406332d91c498fda57aa1a1229262ea8d6739a065da68->leave($__internal_4678ff04fd2d3e1ee8e406332d91c498fda57aa1a1229262ea8d6739a065da68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fd0242fb0e4c7d61d856fb0d674362b52e73d411c01e0b0574d05c7f3688bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd0242fb0e4c7d61d856fb0d674362b52e73d411c01e0b0574d05c7f3688bb1->enter($__internal_8fd0242fb0e4c7d61d856fb0d674362b52e73d411c01e0b0574d05c7f3688bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77ac66105aad131338bb5d8599b974bc3a9929588adef697ae0840dc9a5b229e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ac66105aad131338bb5d8599b974bc3a9929588adef697ae0840dc9a5b229e->enter($__internal_77ac66105aad131338bb5d8599b974bc3a9929588adef697ae0840dc9a5b229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "           

        ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 9
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        <div>
            ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "        </div>
    ";
        
        $__internal_77ac66105aad131338bb5d8599b974bc3a9929588adef697ae0840dc9a5b229e->leave($__internal_77ac66105aad131338bb5d8599b974bc3a9929588adef697ae0840dc9a5b229e_prof);

        
        $__internal_8fd0242fb0e4c7d61d856fb0d674362b52e73d411c01e0b0574d05c7f3688bb1->leave($__internal_8fd0242fb0e4c7d61d856fb0d674362b52e73d411c01e0b0574d05c7f3688bb1_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_244437d232ca09fdb20445842958d10cdec33e9cb18def852862c50a2da95970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244437d232ca09fdb20445842958d10cdec33e9cb18def852862c50a2da95970->enter($__internal_244437d232ca09fdb20445842958d10cdec33e9cb18def852862c50a2da95970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35e3abfae566bf8736e8e3c4054b032bf95572349f1e5e34288f0ef7fc649b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e3abfae566bf8736e8e3c4054b032bf95572349f1e5e34288f0ef7fc649b74->enter($__internal_35e3abfae566bf8736e8e3c4054b032bf95572349f1e5e34288f0ef7fc649b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "            ";
        
        $__internal_35e3abfae566bf8736e8e3c4054b032bf95572349f1e5e34288f0ef7fc649b74->leave($__internal_35e3abfae566bf8736e8e3c4054b032bf95572349f1e5e34288f0ef7fc649b74_prof);

        
        $__internal_244437d232ca09fdb20445842958d10cdec33e9cb18def852862c50a2da95970->leave($__internal_244437d232ca09fdb20445842958d10cdec33e9cb18def852862c50a2da95970_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  106 => 17,  95 => 19,  93 => 17,  89 => 15,  86 => 14,  80 => 13,  71 => 10,  66 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::default/index.html.twig\" %}

   {% block body %}
           

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    {% endblock %}", "@FOSUser/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
