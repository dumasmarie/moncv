<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/loisirs/create')) {
            // create_loisir
            if ('/loisirs/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoisirController::createAction',  '_route' => 'create_loisir',);
            }

            // validate_create_loisir
            if ('/loisirs/create_valid' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_validate_create_loisir;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LoisirController::validateLoisirAction',  '_route' => 'validate_create_loisir',);
            }
            not_validate_create_loisir:

        }

        elseif (0 === strpos($pathinfo, '/loisirs/edit')) {
            // edit_loisir
            if (preg_match('#^/loisirs/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_loisir')), array (  '_controller' => 'AppBundle\\Controller\\LoisirController::editAction',));
            }

            // validate_edit_loisir
            if (0 === strpos($pathinfo, '/loisirs/edit_valid') && preg_match('#^/loisirs/edit_valid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_validate_edit_loisir;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_edit_loisir')), array (  '_controller' => 'AppBundle\\Controller\\LoisirController::validateEditLoisirAction',));
            }
            not_validate_edit_loisir:

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/formations')) {
                // api_formations_get_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_formations_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_collection_operation_name' => 'get',));
                }
                not_api_formations_get_collection:

                // api_formations_post_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_formations_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_collection_operation_name' => 'post',));
                }
                not_api_formations_post_collection:

                // api_formations_get_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_formations_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'get',));
                }
                not_api_formations_get_item:

                // api_formations_delete_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_formations_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'delete',));
                }
                not_api_formations_delete_item:

                // api_formations_put_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_formations_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'put',));
                }
                not_api_formations_put_item:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
