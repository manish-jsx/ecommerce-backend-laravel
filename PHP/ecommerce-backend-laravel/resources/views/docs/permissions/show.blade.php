@extends('docs.layout.app')
/**
 * @api {get} /permissions/{id} View Permission Details
 * @apiName ShowPermission
 * @apiGroup Permissions
 * @apiVersion 1.0.0
 *
 * @apiParam {Number} id Unique permission identifier
 *
 * @apiSuccess {String} name Name of the permission
 * @apiSuccess {String} guard_name Guard name for the permission
 * @apiSuccess {DateTime} created_at Permission creation date
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "name": "edit_posts",
 *       "guard_name": "web",
 *       "created_at": "2023-01-01 12:00:00"
 *     }
 *
 * @apiError PermissionNotFound The permission with the specified ID was not found.
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "Permission not found"
 *     }
 *
 * @apiPermission Authenticated User
 * @apiHeader {String} Authorization Bearer token for authentication
 */
/**
 * View template for displaying detailed information about a specific permission
 * 
 * This blade template extends a layout and shows:
 * - Permission name
 * - Guard name
 * - Creation date (formatted as Month Day, Year)
 * 
 * Actions available:
 * - Edit permission (links to permissions.edit route)
 * - Return to permissions list (links to permissions.index route)
 * 
 * @uses $permission - Permission model instance containing permission details
 * @uses format() - Carbon date formatting
 * @uses route() - Laravel route helper
 * @section content - Defines content section for layout
 */
