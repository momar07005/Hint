<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cc63dcbcbbcaaf31195d7f44ca7085aa09384b92985c51e9c5c2620559e9ac90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8bb92e2f4f6b597dc729cbddee95a91257c4c580a5f1d1ec566a159a5282a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bb92e2f4f6b597dc729cbddee95a91257c4c580a5f1d1ec566a159a5282a1c->enter($__internal_e8bb92e2f4f6b597dc729cbddee95a91257c4c580a5f1d1ec566a159a5282a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7cd36229568398b731727c616f4ed2802e016d18eeb9be7c4429c46f48b084a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd36229568398b731727c616f4ed2802e016d18eeb9be7c4429c46f48b084a7->enter($__internal_7cd36229568398b731727c616f4ed2802e016d18eeb9be7c4429c46f48b084a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e8bb92e2f4f6b597dc729cbddee95a91257c4c580a5f1d1ec566a159a5282a1c->leave($__internal_e8bb92e2f4f6b597dc729cbddee95a91257c4c580a5f1d1ec566a159a5282a1c_prof);

        
        $__internal_7cd36229568398b731727c616f4ed2802e016d18eeb9be7c4429c46f48b084a7->leave($__internal_7cd36229568398b731727c616f4ed2802e016d18eeb9be7c4429c46f48b084a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
