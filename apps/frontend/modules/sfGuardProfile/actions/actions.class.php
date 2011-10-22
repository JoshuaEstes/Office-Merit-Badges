<?php

/**
 * sfGuardProfile actions.
 *
 * @package    OfficeMerits
 * @subpackage sfGuardProfile
 * @author     Joshua Estes
 * @version    SVN: $Id$
 */
class sfGuardProfileActions extends sfActions
{

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->setPage($request->getParameter('p', 1));
    $this->pager = $this->getPager();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sfGuardUser = $this->getRoute()->getObject();
  }

  /**
   *
   * @param sfWebRequest $request
   */
  public function executeNew(sfWebRequest $request)
  {
    throw new sfError404Exception();
  }

  /**
   *
   * @param sfWebRequest $request 
   */
  public function executeCreate(sfWebRequest $request)
  {
    throw new sfError404Exception();
  }

  /**
   * Only the user who owns this profile may edit it
   *
   * @param sfWebRequest $request
   */
  public function executeEdit(sfWebRequest $request)
  {
    throw new sfError404Exception();
  }

  /**
   * Only the user that owns this profile may edit it
   *
   * @param sfWebRequest $request 
   */
  public function executeUpdate(sfWebRequest $request)
  {
    throw new sfError404Exception();
  }

  /**
   *
   * @param sfWebRequest $request 
   */
  public function executeDelete(sfWebRequest $request)
  {
    throw new sfError404Exception();
  }

  /**
   *
   * @return sfDoctrinePager
   */
  protected function getPager()
  {
    $p = new sfDoctrinePager('sfGuardUser', 10);
    $p->setQuery($this->getQuery());
    $p->setPage($this->getPage());
    return $p;
  }

  /**
   *
   * @return Doctrine_Query
   */
  protected function getQuery()
  {
    return Doctrine::getTable('sfGuardUser')->createQuery();
  }

  /**
   * Set the page number we are currently on
   *
   * @param integer $page
   */
  protected function setPage($page)
  {
    $this->getUser()->setAttribute('page', $page, 'sfGuardProfile');
  }

  /**
   * Get the current page
   *
   * @return integer
   */
  protected function getPage()
  {
    return $this->getUser()->getAttribute('page', 1, 'sfGuardProfile');
  }

}
