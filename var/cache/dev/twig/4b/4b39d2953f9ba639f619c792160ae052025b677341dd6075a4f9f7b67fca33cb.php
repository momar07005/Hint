<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_096e93296d33f4f5464d91f7f7376a5f4b14a81c16dec3c607726b330d2e5a00 extends Twig_Template
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
        $__internal_d93a1238aa677838aff6f4282fd7bd5d4a4a7bf2983463284678152de8a4de3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93a1238aa677838aff6f4282fd7bd5d4a4a7bf2983463284678152de8a4de3c->enter($__internal_d93a1238aa677838aff6f4282fd7bd5d4a4a7bf2983463284678152de8a4de3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1424047240e80892df83be28107039e30aa56bc6171a9c67e2639fd2a8e811bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1424047240e80892df83be28107039e30aa56bc6171a9c67e2639fd2a8e811bc->enter($__internal_1424047240e80892df83be28107039e30aa56bc6171a9c67e2639fd2a8e811bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d93a1238aa677838aff6f4282fd7bd5d4a4a7bf2983463284678152de8a4de3c->leave($__internal_d93a1238aa677838aff6f4282fd7bd5d4a4a7bf2983463284678152de8a4de3c_prof);

        
        $__internal_1424047240e80892df83be28107039e30aa56bc6171a9c67e2639fd2a8e811bc->leave($__internal_1424047240e80892df83be28107039e30aa56bc6171a9c67e2639fd2a8e811bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
