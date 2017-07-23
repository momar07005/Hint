<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32c7138c54fbe18a774df6766d223fcc274d21a253810b8c03af834f82ecb4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c7138c54fbe18a774df6766d223fcc274d21a253810b8c03af834f82ecb4ce->enter($__internal_32c7138c54fbe18a774df6766d223fcc274d21a253810b8c03af834f82ecb4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_006ad4e270b8cce9e5a986fe1a0d4aa44c8ddc9b1a37a6c92c3f052f70342ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006ad4e270b8cce9e5a986fe1a0d4aa44c8ddc9b1a37a6c92c3f052f70342ff8->enter($__internal_006ad4e270b8cce9e5a986fe1a0d4aa44c8ddc9b1a37a6c92c3f052f70342ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c7138c54fbe18a774df6766d223fcc274d21a253810b8c03af834f82ecb4ce->leave($__internal_32c7138c54fbe18a774df6766d223fcc274d21a253810b8c03af834f82ecb4ce_prof);

        
        $__internal_006ad4e270b8cce9e5a986fe1a0d4aa44c8ddc9b1a37a6c92c3f052f70342ff8->leave($__internal_006ad4e270b8cce9e5a986fe1a0d4aa44c8ddc9b1a37a6c92c3f052f70342ff8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_18fd6c794b7603a4bd7cd1ba17aba0fdb22ed4b9274c8aa657f56b5183c2e104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fd6c794b7603a4bd7cd1ba17aba0fdb22ed4b9274c8aa657f56b5183c2e104->enter($__internal_18fd6c794b7603a4bd7cd1ba17aba0fdb22ed4b9274c8aa657f56b5183c2e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8b6b3be69680afe84ae37cb9f6562ddc3b6db505e9d48ca9323317a567c558e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6b3be69680afe84ae37cb9f6562ddc3b6db505e9d48ca9323317a567c558e9->enter($__internal_8b6b3be69680afe84ae37cb9f6562ddc3b6db505e9d48ca9323317a567c558e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 5
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 6
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 7
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        <div>
            ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "        </div>
    </script>
    ";
        
        $__internal_8b6b3be69680afe84ae37cb9f6562ddc3b6db505e9d48ca9323317a567c558e9->leave($__internal_8b6b3be69680afe84ae37cb9f6562ddc3b6db505e9d48ca9323317a567c558e9_prof);

        
        $__internal_18fd6c794b7603a4bd7cd1ba17aba0fdb22ed4b9274c8aa657f56b5183c2e104->leave($__internal_18fd6c794b7603a4bd7cd1ba17aba0fdb22ed4b9274c8aa657f56b5183c2e104_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbf08d8e7d74bcbfb2ae844fcc5ee025697ff710200c2797aa3f9a456ac0d965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf08d8e7d74bcbfb2ae844fcc5ee025697ff710200c2797aa3f9a456ac0d965->enter($__internal_cbf08d8e7d74bcbfb2ae844fcc5ee025697ff710200c2797aa3f9a456ac0d965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b57bb62449aee55e696a985705813a15ab3a39fd872500cc5237b0b59ee16bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b57bb62449aee55e696a985705813a15ab3a39fd872500cc5237b0b59ee16bd->enter($__internal_1b57bb62449aee55e696a985705813a15ab3a39fd872500cc5237b0b59ee16bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_1b57bb62449aee55e696a985705813a15ab3a39fd872500cc5237b0b59ee16bd->leave($__internal_1b57bb62449aee55e696a985705813a15ab3a39fd872500cc5237b0b59ee16bd_prof);

        
        $__internal_cbf08d8e7d74bcbfb2ae844fcc5ee025697ff710200c2797aa3f9a456ac0d965->leave($__internal_cbf08d8e7d74bcbfb2ae844fcc5ee025697ff710200c2797aa3f9a456ac0d965_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 15,  104 => 14,  92 => 16,  90 => 14,  86 => 12,  83 => 11,  77 => 10,  68 => 7,  63 => 6,  58 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
   {% block content %}
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
    </script>
    {% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
