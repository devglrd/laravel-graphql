<?php

namespace App\Http\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class createUser
{
    /**
     * Return a value for the field.
     *
     * @param null $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param array $args The arguments that were passed into the field.
     * @param GraphQLContext|null $context Arbitrary data that is shared between all fields of a single query.
     * @param ResolveInfo $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     *
     * @return mixed
     */
    public function resolve($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
        //Args is args passed
        //Context is request
        $attribute = collect($args);
        $user = new User();
        $user->email = $attribute->get('email');
        $user->name = $attribute->get('name');
        $user->password = bcrypt($attribute->get('email'));
        $user->save();
        return $user;
        //dd($rootValue, $args, $context, $resolveInfo);
        
    }
}
