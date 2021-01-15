<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatosTable Test Case
 */
class ContatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatosTable
     */
    protected $Contatos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Contatos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contatos') ? [] : ['className' => ContatosTable::class];
        $this->Contatos = $this->getTableLocator()->get('Contatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Contatos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
