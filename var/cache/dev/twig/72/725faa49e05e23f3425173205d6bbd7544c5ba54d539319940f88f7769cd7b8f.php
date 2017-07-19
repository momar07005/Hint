<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9142e69960790d208c02f39bc03b0c150d6f10710ea4e1564a682fb1c5b02ec7 extends Twig_Template
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
        $__internal_0f78de924dc2267f30953f33c4087c3d22696cfb2994bca0a31a975494fb3dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f78de924dc2267f30953f33c4087c3d22696cfb2994bca0a31a975494fb3dec->enter($__internal_0f78de924dc2267f30953f33c4087c3d22696cfb2994bca0a31a975494fb3dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c3b77f9b74d37db65a5b5bc34c52ffad662cb5978228de381066597bf0b89c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b77f9b74d37db65a5b5bc34c52ffad662cb5978228de381066597bf0b89c91->enter($__internal_c3b77f9b74d37db65a5b5bc34c52ffad662cb5978228de381066597bf0b89c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0f78de924dc2267f30953f33c4087c3d22696cfb2994bca0a31a975494fb3dec->leave($__internal_0f78de924dc2267f30953f33c4087c3d22696cfb2994bca0a31a975494fb3dec_prof);

        
        $__internal_c3b77f9b74d37db65a5b5bc34c52ffad662cb5978228de381066597bf0b89c91->leave($__internal_c3b77f9b74d37db65a5b5bc34c52ffad662cb5978228de381066597bf0b89c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
