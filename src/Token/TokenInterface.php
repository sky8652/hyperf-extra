<?php
declare(strict_types=1);

namespace Hyperf\Extra\Token;

use Lcobucci\JWT\Token;
use stdClass;

interface TokenInterface
{
    /**
     * Generate token
     * @param string $scene
     * @param string $jti
     * @param string $ack
     * @param stdClass|null $symbol
     * @return Token
     */
    public function create(string $scene, string $jti, string $ack, ?stdClass $symbol): Token;

    /**
     * Get token
     * @param string $tokenString
     * @return Token
     */
    public function get(string $tokenString): Token;

    /**
     * Verification token
     * @param string $scene
     * @param string $tokenString
     * @return stdClass
     */
    public function verify(string $scene, string $tokenString): stdClass;
}